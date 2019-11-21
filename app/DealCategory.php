<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class DealCategory extends Model
{
	// 1) Relation (deal category can have more than one details)
    public function deal_categories_details()
    {
        return $this->hasMany('App\DealsCategoryDetail', 'category_id', 'id');
    }
}
