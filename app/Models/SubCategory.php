<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
  protected $fillable = ["menu_id","category_id","name","description","icon",'status'];

  public function menu(){
    return $this->belongsTo('App\Models\Menu','menu_id','id');
  }

  public function category(){
     return $this->belongsTo('App\Models\Category','category_id','id');
  }
// FrontEnd
  public function products()
  {
    return $this->hasMany('App\Models\Product');
  }


  public function menus()
  {
    return $this->hasMany('App\Models\Product','menu_id','id');
  }


}
