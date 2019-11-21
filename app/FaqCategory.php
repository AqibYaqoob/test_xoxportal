<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class FaqCategory extends Model
{
	// 1) Relation (faq category can have more than one details)
    public function faq_details()
    {
        return $this->hasMany('App\FaqDetail', 'faq_category_id', 'id');
    }
}
