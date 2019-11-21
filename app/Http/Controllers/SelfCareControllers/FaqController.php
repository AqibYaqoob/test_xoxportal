<?php

namespace App\Http\Controllers\SelfCareControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    
    /**
     *
     * 1) FAQ Info Page
     *
     */
    public function index(Request $req){
    	$data['title'] = 'FAQ';
    	return view('selfcare.pages.faq', $data);
    }
}
