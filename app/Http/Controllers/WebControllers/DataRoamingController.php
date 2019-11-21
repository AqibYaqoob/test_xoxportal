<?php

namespace App\Http\Controllers\WebControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Plan;

class DataRoamingController extends Controller
{
    private $model = null;

	/**
     * Instantiate a new TermsAndConditionController instance.
     */
    public function __construct()
    {
        $this->model = new Plan;
    }

    /**
     *
     * Handler for Getting Plan Image  
     * (id)
     */
    public function getPlanImage(Request $req){
        $imageSrc = $this->model->where('id', $req->id)->select('image')->first();
        $data = null;
        $status = false;
        if($imageSrc){
        	$data = $imageSrc->toArray();
        	$status = true;
        }
        return response()->json(['status' => $status, 'data' => $data]);
    }

}
