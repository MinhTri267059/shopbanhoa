<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $fillable = ['id', 'pro_id', 'description'];
    
    //mot cate co mot hoac nhieu product
    public function product () { 
    	return $this->belongTo('App\Product');
    }
}
