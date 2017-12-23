<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emailsale extends Model
{
    protected $table = "emailsale";
    protected $primaryKey = "id";

    public function sale(){
    	return $this->belongsTo('App\Sale', 'sale_id', 'id');
    }
}
