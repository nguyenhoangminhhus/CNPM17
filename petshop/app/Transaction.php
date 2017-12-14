<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = "transaction";

    public function billdetails(){
    	return $this->hasOne('App\Bill', 'Transaction_id', 'transaction_id');
    }
}
