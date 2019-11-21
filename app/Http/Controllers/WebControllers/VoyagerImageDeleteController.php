<?php

namespace App\Http\Controllers\WebControllers;;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Pvtl\VoyagerPageBlocks\PageBlock;

class VoyagerImageDeleteController extends Controller
{
    public function __construct()
    {
        $this->filesystem = config('voyager.storage.disk');
    }
       // Function to Delete Image from Database and Storage
    public function delete(Request $request)
    {
        //Getting page-Block-Id and key of Image Which we want to delete
        $key = $request->id;
        $pageBlockId = (int)$request->pageid;
        //Query to get data properties against given pageid
        $pageBlockRecord = PageBlock::where('id', $pageBlockId)->select('data')->first();
        // 1) Delete File from Storage
        Storage::disk($this->filesystem)->delete('storage/'.$pageBlockRecord->data->{$key});
        // 2) Update Page Block Table
        $data = $pageBlockRecord->data;
        //Set Image Value Into null
        $data->{$key} = "";
        $encodedData = json_encode($data);
        //Updating empty Image Value to database
        $updatePageBlock = PageBlock::where('id', $pageBlockId)->update(['data' => $encodedData]);
        return response()->json(['status' => true, 'msg' => 'Succesfully deleted']);
    }
}
