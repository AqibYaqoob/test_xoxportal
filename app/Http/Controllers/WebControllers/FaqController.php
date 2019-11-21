<?php

namespace App\Http\Controllers\WebControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\FaqCategory;
use App\FaqDetail;

class FaqController extends Controller
{
    private $faqCategory = null;
    private $faqDetails = null;

	/**
     * Instantiate a new TermsAndConditionController instance.
     */
    public function __construct()
    {
        $this->faqCategory = new FaqCategory;
        $this->faqDetails = new FaqDetail;
    }

    /**
     *
     * Handler for showing T&C Page  
     * (no params)
     */
    public function index($categoryName = null){
        $data['details'] = null;
        if($categoryName){
            $data['details'] = $this->faqCategory->select('id', 'category_slug')->with('faq_details')->where('category_slug', $categoryName)->first();
            if($data['details']){
                $data['details'] = $data['details']->toArray();
            } 
        }
        $data['title'] = 'FAQ';
        $data['categories'] = $this->faqCategory->select('id', 'category_name', 'category_slug')->get()->toArray();
    	return view('web.pages.faq', $data);
    }
}
