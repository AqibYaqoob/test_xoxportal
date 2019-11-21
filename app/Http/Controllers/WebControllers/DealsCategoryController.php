<?php

namespace App\Http\Controllers\WebControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DealCategory;

class DealsCategoryController extends Controller
{
    private $model = null;

	/**
     * Instantiate a new Deals Category Controller Modal instance.
     */
    public function __construct()
    {
        $this->model = new DealCategory;
    }

    /**
     *
     * Handler for Getting Category Details  
     * (id)
     */
    public function index(Request $req){
        $detail = $this->model->where('deal_id', $req->id)->select('category_name', 'id')->get();
        $data = null;
        $status = false;
        if($detail){
        	$data = $detail->toArray();
        	$status = true;
        }
        return response()->json(['status' => $status, 'data' => $data]);
    }

}
