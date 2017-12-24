<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = "sale";
    protected $primaryKey = "sale_id";

    public function products(){
    	return $this->hasMany('App\Products', 'saleoff_id', 'sale_id');
    }

    public function emailsale(){
    	return $this->hasMany('App\Emailsale', 'sale_id', 'sale_id');
    }
}
