<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
  protected $fillable = [
      'name', 'country_id',
  ];
 
 public function countries() {
    
    return $this->belongsTo("App\Country");
   
}
  
}

