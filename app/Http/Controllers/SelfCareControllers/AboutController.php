<?php

namespace App\Http\Controllers\SelfCareControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{

    /**
     *
     * 1) About us Info Page
     *
     */
    public function index(Request $req){
    	$data['title'] = 'About Us';
    	return view('selfcare.pages.about_selfcare', $data);
    }
}
