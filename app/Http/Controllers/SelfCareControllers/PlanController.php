<?php

namespace App\Http\Controllers\SelfCareControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class PlanController extends Controller
{

	/**
	 *@param none
	 *
	 * msisdn required to get user profile
	 * access_token require to get available plan list
	 */
    public function index(){
			$title = __('plans.title');
			$subscriberInfo= '';
			$planeList = '';
			// Get Current Subscriber Detail
			if(Session::get('userProfile')){
          $userProfile = Session::get('userProfile');
          $data['msisdn'] = $userProfile->MSISDN;
      }
			$responseData = sendRequest('POST', config('xox_middleware_path.subscriber_profile'), $data);
			if($responseData->code = 24171){
			$subscriberInfo = $responseData->data->data->SubscriberInfo;
		}

			//Get All Available Plan List With Detail
			if(Session::get('authentication')){
					$authData = Session::get('authentication');
					$data['access_token'] = $authData->access_token;
			}
			$availablePlan = sendRequest('POST', config('xox_middleware_path.upgradeDowngradePlaneList'), $data);
			if($availablePlan->code == 24300){
				$planeList = $availablePlan->data->data->List;
			}

			return view('selfcare.pages.authenticated_pages.change_plan', compact(['planeList', 'subscriberInfo', 'title']));
    }

		/**
		 *@param Illuminate\Http\Request $request
		 *
		 * msisdn required to update plan
		 * access_token require to update plan
		 */
		public function changePlan(Request $request){

			if(Session::get('authentication')){
					$authData = Session::get('authentication');
					$data['access_token'] = $authData->access_token;
			}
			if(Session::get('userProfile')){
          $userProfile = Session::get('userProfile');
          $data['msisdn'] = $userProfile->MSISDN;
      }
			$data['plan_code'] = $request->plan;
			$updatePlan = sendRequest('POST', config('xox_middleware_path.requestUpgradeDowngradePlan'), $data);

			return response()->json($updatePlan);
		}
}
