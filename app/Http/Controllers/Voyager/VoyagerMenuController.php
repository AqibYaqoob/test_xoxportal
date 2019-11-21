<?php

namespace App\Http\Controllers\Voyager;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use TCG\Voyager\Facades\Voyager;
use DB;

use TCG\Voyager\Http\Controllers\VoyagerMenuController as BaseVoyagerMenuController;

class VoyagerMenuController extends BaseVoyagerMenuController
{
    /**
     * POST - Get all Menu Items.
     *
     * @param int $id(Menu id to get all menu_items)
     *
     */
    public function builder($id)
    {
        $menu = Voyager::model('Menu')->findOrFail($id);
        $this->authorize('edit', $menu);

        $isModelTranslatable = is_bread_translatable(Voyager::model('MenuItem'));

        //remove menu from cache
        \Cache::forget('voyager_menu_'.$menu->name);
        return Voyager::view('voyager::menus.builder', compact('menu', 'isModelTranslatable'));
    }

    /**
     * POST - Order Menu Items.
     *
     * @param \Illuminate\Http\Request $request
     * Set Order For parent
     *
     */
    public function order_item(Request $request)
    {
        $menuItemOrder = json_decode($request->input('order'));

        $query = "update menu_items set menu_items.order = (CASE ";
        $parentIdCase = ", menu_items.parent_id = (CASE ";
        $whereIn = [];

        //Loop all menu items with their parent, this loop extract only parent
        foreach($menuItemOrder as $key => $value)
        {
            $query .= " WHEN id = " . $value->id . " THEN ". ($key +1) ." ";
            $parentIdCase .= " WHEN id = " . $value->id . " THEN null ";
            array_push($whereIn, $value->id);
            if(isset($value->children))
            {
                $this->nested($value->children, $query, $value->id, $parentIdCase, $whereIn);
            }
        }
        $parentIdCase .=  " end)";
        $query .=  " end)";
        $query = $query.$parentIdCase . " WHERE id in (".implode(",", $whereIn).")";
        $runQuery = DB::update($query);
    }

    /**
     * POST - Order Menu Items.
     *
     * @param array $items(parent with child)
     *@param  $query(SQL raw query)
     *@param int $parentId(parent ID for all child)
     *@param $parentIdCase(SQL case to set parent_id)
     *@param array $whereIn(array with all menu items id)
     *
     * Set parent Order
     */
        public function nested(array $item, &$query, $parentId, &$parentIdCase, &$whereIn)
        {
            // parent loop extract child items
            foreach($item as $k => $val)
            {
                $query .= " when id = " . $val->id . " then ". ($k + 1)."";
                $parentIdCase .= " when id = " . $val->id . " then ". $parentId ."";
                array_push($whereIn, $val->id);
                if(isset($val->children))
                {
                    // if there is child inside child, function call to extract all childs, save all child with their parent id and order
                    $this->nested($val->children, $query, $val->id, $parentIdCase, $whereIn);
                }
            }
        }
}
