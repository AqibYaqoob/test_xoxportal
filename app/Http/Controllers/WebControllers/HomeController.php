<?php

namespace App\Http\Controllers\WebControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

	/**
     * Instantiate a new HomeController instance.
     */
    public function __construct()
    {

    }

    /**
     *
     * Handler for Web Index Page 
     * (To Show Index Page Content)
     */
    public function index(Request $req){
    	return view('web.index');
    }
}
