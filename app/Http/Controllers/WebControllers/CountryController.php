<?php

namespace App\Http\Controllers\WebControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Country;

class CountryController extends Controller
{
    private $model = null;

	/**
     * Instantiate a new Country Controller Modal instance.
     */
    public function __construct()
    {
        $this->model = new Country;
    }

    /**
     *
     * Handler for Getting Country Details  
     * (id)
     */
    public function index(Request $req){
        $detail = $this->model->where('id', $req->id)->select('name', 'roaming_operator', 'country_code')->first();
        $data = null;
        $status = false;
        if($detail){
        	$data = $detail->toArray();
        	$status = true;
        }
        return response()->json(['status' => $status, 'data' => $data]);
    }

}
