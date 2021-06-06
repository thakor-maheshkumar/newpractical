<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
   protected $guarded = array();

   public function category(){
      return $this->belongsTo('App\Category');
   }
}
