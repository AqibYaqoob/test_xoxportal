<?php

namespace App\Http\Controllers\SelfCareControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BillController extends Controller{

	/**
	 *
	 * 1) Bill History Page with Filteration of Record
	 * (Required Fields : token, month, year, msisdn)
	 */
	public function billHistory(Request $req){
		$data = $request->only(['month', 'token', 'auth_name', 'year', 'msisdn']);
		$data['title'] = 'Bill History';
		// 1- Get Bill History for Current Year.
		$data['msisdn'] = 601157854084;
		$responseData = sendRequest('POST', config('xox_middleware_path.bill_history'), $data);
		if($responseData->status){
            if($responseData->code == 24137){
                // 2- Success
                session()->flash('success_msg', ['status' => true, 'data' => $responseData->data, 'message' => $responseData->message]);
                return redirect()->back();  
            }
        }
        else{
            // 3- Validation Error
            if($responseData->code == 5002){
                session()->flash('error_msg', ['status' => false, 'data' => $responseData->error, 'message' => $responseData->message]);
                return redirect()->back(); 
            }
        }
		return view('selfcare.pages.bill_history', $data);
	}

	/** 
	 *
	 * 2) Download Bill
	 * (Required Fields : token, month, year, msisdn, billcycleday)
	 */
	public function billDownload(Request $req){
		$data = $request->only(['month', 'token', 'auth_name', 'year', 'msisdn', 'billcycleday']);
		$data['title'] = 'Bill Download';
		// 1- Get Bill History for Current Year.
		$data['msisdn'] = 601157854084;
		$responseData = sendRequest('POST', config('xox_middleware_path.bill_history'), $data);
		if($responseData->status){
            if($responseData->code == 24271){
                // 2- Success
                session()->flash('success_msg', ['status' => true, 'data' => $responseData->data, 'message' => $responseData->message]);
                return redirect()->back();  
            }
        }
        else{
            // 3- Validation Error
            if($responseData->code == 5002){
                session()->flash('error_msg', ['status' => false, 'data' => $responseData->error, 'message' => $responseData->message]);
                return redirect()->back(); 
            }
        }
		return view('selfcare.pages.bill_history', $data);
	}

	/**
	 *
	 * 3) Purchase Details
	 *
	 */
	public function purchaseDetail(Request $req){
		$data = $request->only(['amount', 'token', 'auth_name', 'date', 'msisdn']);
	}

}
