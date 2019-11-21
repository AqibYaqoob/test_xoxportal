<?php

namespace App\Http\Controllers\SelfCareControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriberCntroller extends Controller
{

    /**
     *
     * 1) Subscriber All Numbers Report Info Page
     * 
     */
    public function numbersDetail(Request $req){ 
    	$data = $request->only(['subid', 'token', 'auth_name']);
    	$data['title'] = 'Numbers Detail';
    	$responseData = sendRequest('POST', config('xox_middleware_path.view_subscriber_numbers'), $data);
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
		return view('selfcare.pages.authenticated_pages.subscriber_numbers_list', $data);
    }
}
