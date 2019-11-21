<?php

namespace App\Http\Controllers\SelfCareControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Redirect;
class UserController extends Controller
{

    /**
     *
     * 1) Login Page Url
     * No Parameters required
     */
    public function login(Request $req){
    	// Redirected to the Url given by the XOX Team
    }

    /**
     *
     * 2) Register Page Url
     * No Parameters required
     */
    public function registerPage(Request $req){
        $data = [];
    	return view('selfcare.pages.register', $data);
    }

    /**
     *
     * 3) Reset Password Page Url
     * No Parameters required
     */
    public function resetPassword(Request $req){
        $data = [];
        return view('selfcare.pages.reset_password', $data);
    }

    /**
     * @param Illuminate\Http\Request $req
     *
     * access_code required to get access_token
     */
    public function getToken(Request $req){
        // Code from the XOX Self Care Page in query parameter
        // $data['code'] = $req->code;
        $data['code'] = 'AQAgNzgyMDk4ZDA1NmQwNDNiMGJkZTRiYmRmMTE0ZGM5MDEIABCQOiaIIzM3nhlvYsKsKJZWADB1qlZmURkjIhA-oq-YTAPa0m4E8rEZnTQOw2cVssdtRRv7EvP3iXggq8BrC0JbO8E=';
        $responseData = sendRequest('POST', config('xox_middleware_path.token'), $data);

        if($responseData){
            if($responseData->code == 24137){
                $recordData = $responseData->data;
                Session::put('authentication', $recordData);

                //Get user information (MSISDN, profileID)
                $data['access_token'] = $recordData->access_token;
                $userProfile  = sendRequest('POST', config('xox_middleware_path.IDCSlogin'), $data);
                $userInfo = $userProfile->data->data;
                Session::put('userProfile', $userInfo);
                $authData = Session::get('userProfile');
                return redirect('selfcare/home');
            }
        }
        return redirect('selfcare/login');
    }

    /**
     *
     * 5) Change Password Url
     * No Parameters required
     */
    public function changePasswordPage(Request $req){
        $data = [];
        return view('selfcare.pages.authenticated_pages.change_password', $data);
    }

    /**
     *
     * 6) Change Password Functionality
     * Request Parameter (old_password, password, password_confirmation, token)
     */
    public function changePassword(Request $req){
        $data = $request->only(['old_password', 'password', 'password_confirmation', 'token', 'auth_name']);
        $responseData = sendRequest('POST', config('xox_middleware_path.change_password'), $data);
        if($responseData->status){
            if($responseData->code == 24137){
                // Success
                session()->flash('success_msg', ['status' => true, 'data' => $responseData->error, 'message' => $responseData->message]);
                return redirect()->back();
            }
        }
        else{
            // Validation Error
            if($responseData->code == 5002){
                session()->flash('error_msg', ['status' => false, 'data' => $responseData->error, 'message' => $responseData->message]);
                return redirect()->back();
            }
        }
    }

}
