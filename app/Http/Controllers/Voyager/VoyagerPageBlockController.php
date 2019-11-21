<?php

namespace App\Http\Controllers\Voyager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

use \Pvtl\VoyagerPageBlocks\Http\Controllers\PageBlockController as BaseVoyagerPageBlockController;

class VoyagerPageBlockController extends BaseVoyagerPageBlockController
{
   /**
   * POST - Order Page Blocks.
   *
   * @param \Illuminate\Http\Request $request
   */
  public function sort(Request $request)
  {
      $blockOrder = json_decode($request->input('order'));
      $sql = "UPDATE page_blocks SET page_blocks.order = (CASE id ";
      $inData = "(";
      $totalIndex = count($blockOrder);
      foreach ($blockOrder as $index => $item) {
          if(($index+1) == $totalIndex){
              $inData .= $item->id;
          }
          else{
              $inData .= $item->id .", ";
          }
          $sql .= "WHEN ".$item->id." THEN ".($index + 1)." ";
      }
      $inData .= ")";
      $sql .="END) WHERE id in ".$inData;
      DB::select($sql);
  }
}
