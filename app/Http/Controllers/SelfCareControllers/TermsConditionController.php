<?php

namespace App\Http\Controllers\SelfCareControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TermsConditionController extends Controller
{
    
    /**
     *
     * 1) T&C Info Page
     *
     */
    public function index(Request $req){
    	$data['title'] = 'T&C';
    	return view('selfcare.pages.terms_conditions', $data);
    }
}
