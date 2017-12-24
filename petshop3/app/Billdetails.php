<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billdetails extends Model
{
    protected $table = "billdetails";
    protected $primaryKey = "billdetails_id";

    public function products(){
    	return $this->belongsTo('App\Products', 'products_id', 'billdetails_id');
    }

    public function bill(){
    	return $this->belongsTo('App\Bill', 'Transaction_id', 'billdetails_id');
    }
}
