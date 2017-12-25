<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = "transaction";
    protected $primaryKey = "transaction_id";

    public function billdetails(){
    	return $this->hasOne('App\Bill', 'Transaction_id', 'transaction_id');
    }

    public function Transaction(){
    	return $this->belongsTo('App\Customer','customer_id','transaction_id');
    }
}
