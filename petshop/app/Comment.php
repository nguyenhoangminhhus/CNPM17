<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comment";
    protected $primaryKey = "comment_id";

    public function products(){
    	return $this ->belongsTo('App\Products', 'products_id', 'comment_id');
    }
    public function users(){
    	return $this ->belongsTo('App\User', 'user_id', 'comment_id');
    }
}
