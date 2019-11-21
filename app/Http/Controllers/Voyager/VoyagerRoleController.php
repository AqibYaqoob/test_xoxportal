<?php

namespace App\Http\Controllers\Voyager;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Events\BreadDataDeleted;
use TCG\Voyager\Http\Controllers\VoyagerRoleController as BaseVoyagerRoleController;

class VoyagerRoleController extends BaseVoyagerRoleController
{
    public function destroy(Request $request, $id)
    {
    	try {
    		$slug = $this->getSlug($request);

	        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

	        // Check permission
	        $this->authorize('delete', app($dataType->model_name));

	        // Init array of IDs
	        $ids = [];
	        if (empty($id)) {
	            // Bulk delete, get IDs from POST
	            $ids = explode(',', $request->ids);
	        } else {
	            // Single item delete, get ID from URL
	            $ids[] = $id;
	        }
	        foreach ($ids as $id) {
	            $data = call_user_func([$dataType->model_name, 'findOrFail'], $id);

	            $model = app($dataType->model_name);
	            if (!($model && in_array(SoftDeletes::class, class_uses($model)))) {
	                $this->cleanup($dataType, $data);
	            }
	        }

	        $displayName = count($ids) > 1 ? $dataType->display_name_plural : $dataType->display_name_singular;

	        $res = $data->destroy($ids);
	        $data = $res
	            ? [
	                'message'    => __('voyager::generic.successfully_deleted')." {$displayName}",
	                'alert-type' => 'success',
	            ]
	            : [
	                'message'    => __('voyager::generic.error_deleting')." {$displayName}",
	                'alert-type' => 'error',
	            ];

	        if ($res) {
	            event(new BreadDataDeleted($dataType, $data));
	        }

	        return redirect()->route("voyager.{$dataType->slug}.index")->with($data);	
    	} catch (\Illuminate\Database\QueryException $e) {
    		return redirect()->route("voyager.{$dataType->slug}.index")->with([
	                'message'    => __('voyager::generic.error_deleting')." {$displayName}",
	                'alert-type' => 'error',
	            ]);
    	}
    }
}
