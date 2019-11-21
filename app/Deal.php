<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    // 1) Relation (deal category can have more than one details)
    public function deal_categories()
    {
        return $this->hasMany('App\DealCategory', 'deal_id', 'id');
    }
}
