<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	// 1) Handler for Getting Page content on basis of Slug
    public static function findBySlug($slug){
    	return static::where('slug', $slug)->first();
    }

    // 2) Handler for Getting Landing Page
     public static function findLandingPage(){
     	$record = static::where('is_landing_page', 1)->first();
     	if($record){
     		return $record->slug;	
     	}
     	return 'hello-world';
    } 
}
