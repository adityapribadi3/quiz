<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
  public function category(){
    return $this->belongsTo('App\category','category_id');
  }

    //
}