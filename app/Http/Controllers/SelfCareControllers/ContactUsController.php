<?php

namespace App\Http\Controllers\SelfCareControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    
    /**
     *
     * 1) Contact Us Info Page
     *
     */
    public function index(Request $req){
    	$data['title'] = 'Contact Us';
    	return view('selfcare.pages.contact_us', $data);
    }
}
