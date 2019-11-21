<?php

namespace App\Http\Controllers\WebControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bod;

class BoardOfDirectorController extends Controller
{
    private $model = null;

	/**
     * Instantiate a new TermsAndConditionController instance.
     */
    public function __construct()
    {
        $this->model = new Bod;
    }

    /**
     *
     * Handler for showing Bod Detail Page  
     * (categoryName (optional) )
     */
    public function index($categoryName = null){
        $data['details'] = null;
        if($categoryName){
            $data['details'] = $this->model->where('category_slug', $categoryName)->first();
            if($data['details']){
                $data['details'] = $data['details']->toArray();
                // Previous and Next Record
                $data['previous'] = $this->model->where('id', '<', $data['details']['id'])->select('category_slug')->orderBy('id','desc')->first();
                $data['next'] = $this->model->where('id', '>', $data['details']['id'])->select('category_slug')->orderBy('id')->first();
            } 
        }
        $data['title'] = 'Board of Director Detail';
    	return view('web.pages.board_of_director_details', $data);
    }

}
