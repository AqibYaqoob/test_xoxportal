<?php

namespace App\Http\Controllers\WebControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TermsConditionCategory;

class TermsAndConditionController extends Controller
{
    private $model = null;

	/**
     * Instantiate a new TermsAndConditionController instance.
     */
    public function __construct()
    {
        $this->model = new TermsConditionCategory;
    }

    /**
     *
     * Handler for showing T&C Page  
     * (no params)
     */
    public function index($categoryName = null){
        $data['details'] = null;
        if($categoryName){
            $data['details'] = $this->model->select('category_slug', 'detail')->where('category_slug', $categoryName)->first();
            if($data['details']){
                $data['details'] = $data['details']->toArray();
            } 
        }
        $data['title'] = 'Terms and Condition';
        $data['categories'] = $this->model->select('id', 'category_name', 'category_slug')->get()->toArray();
    	return view('web.pages.terms_and_condition', $data);
    }
}
