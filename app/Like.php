<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['user_id', 'item_id'];
    
    public function item(){
    return $this->belongsTo('App\Item');
    }
    
   
}
