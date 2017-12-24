<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";
    protected $primaryKey = "customer_id";

    public function transaction(){
    	return $this->hasMany('App\Transaction', 'customer_id', 'transaction_id');
    }
}
