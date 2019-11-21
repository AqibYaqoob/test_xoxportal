<?php

namespace App\Http\Controllers\SelfCareControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Redirect;

class ProfileController extends Controller
{

    /**
     *@param Illuminate\Http\Request $request
     *
     * msisdn required to get user profile
     *
     */
    public function index(Request $req){
    	// 1- Get User Profile Record
      $title = __('subscriberProfile.title');

      if(Session::get('userProfile')){
          $userProfile = Session::get('userProfile');
          $data['msisdn'] = $userProfile->MSISDN;
      }
      // $data['msisdn'] = '601157854084';
    	$responseData = sendRequest('POST', config('xox_middleware_path.subscriber_profile'), $data);
      $subscriberInfo = $responseData->data->data->SubscriberInfo;
      $seasonPass = $responseData->data->data->SeasonPass;
    	return view('selfcare.pages.authenticated_pages.profile', compact(['seasonPass', 'subscriberInfo', 'title']));
    }
}
