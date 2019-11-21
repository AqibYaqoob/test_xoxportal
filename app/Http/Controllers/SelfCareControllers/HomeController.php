<?php

namespace App\Http\Controllers\SelfCareControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    /**
     *
     * 1) Home Page Handler
     * No Parameters required
     */
    public function index(Request $req){
    	$data = [];
        return view('selfcare.pages.authenticated_pages.home', $data);
    }
    
}
