<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = "sale";

    public function products(){
    	return $this->hasMany('App\Products', 'saleoff_id', 'sale_id');
    }
}
