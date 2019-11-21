<?php

namespace App\Http\Controllers\WebControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
class PageController extends Controller
{
    /**
     * Instantiate a new HomeController instance.
     */
    public function __construct()
    {

    }

    /**
     *
     * Handler for Web Pages 
     * (To Show Web Pages Content on basis of slugs)
     */
    public function show($slug){
    	$page = Page::findBySlug($slug);
    	return view('web.index', ['page' => $page]);
    }

    /**
     *
     * Handler for Redirect to Landing Page 
     * (To Show Web Pages Content without )
     */
    public function redirect(){
    	$slug = Page::findLandingPage();
    	return redirect('/site/'.$slug);
    }
}
