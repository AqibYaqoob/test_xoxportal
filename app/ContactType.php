<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ContactType extends Model
{
    public function contact_details(){
    	return $this->hasMany('App\ContactDetail', 'contact_type_id', 'id');
    }
}
