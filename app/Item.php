<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['prefecture_id','name','description','category_id','price','image'];
    
    public function prefecture(){
      return $this->belongsTo('App\Prefecture');
    }
    
    public function category(){
      return $this->belongsTo('App\Category');
    }
    
    public function scopePrefecture_items($query){
      return $query->limit(3);
    }
    
    public function likes(){
      return $this->hasMany('App\Like');
    }
    
    public function likedUsers(){
      return $this->belongsToMany('App\User','likes');
    }
    
    public function isLikedBy($user){
      $liked_users_ids = $this->likedUsers->pluck('id');
      $result = $liked_users_ids->contains($user->id);
      return $result;
    }
    
 
    
   
}
