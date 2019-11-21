<?php

namespace App\Http\Controllers\WebControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Redirect;
Use Mail;

class SupportController extends Controller
{
    /**
     * Instantiate a new SupportController instance.
     */
    public function __construct(){

    }

    /**
     *
     * Handler for Send Enquiry 
     * Required Params (category, name, email, contact_no, subject, msg)
     */
    public function sendEnquiry(Request $req){
        $data = [
            'subject'         => $req->subject,
            'heading_details' => 'New Feed back from User Name =  <u><b>' . $req->name . '</b></u>.<br> Email Address = '. $req->email,
            'category'        => 'Feed Back',
            'heading'         => 'Support',
            'title'           => '',
            'content'         => $req->msg,
            'email'           => $req->category,
        ];
        sendEmail($data);
        return back()->with('message', ['status' => true, 'msg' => 'Thanks for your feedback. We will get back you as soon as possible. Thanks']);
    }

}
