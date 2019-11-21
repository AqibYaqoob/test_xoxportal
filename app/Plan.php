<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Plan extends Model
{
    public function getImageAttribute($value)
	{
	    return asset('storage/'.$value);
	}
}
