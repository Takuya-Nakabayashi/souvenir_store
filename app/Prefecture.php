<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    
    protected $fillable = ['name'];
    
    public function item(){
    return $this->belongsTo('App\Item');
    }
    
     public function user(){
    return $this->belongsTo('App\User');
    }
}
