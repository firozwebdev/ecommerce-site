<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\SubCategory;
use App\Models\Product;

class Category extends Model
{
  protected $fillable = [
  "menu_id","name","description","category_icon","status"
];

//menu relation
  public function menu(){
    return $this->belongsTo('App\Models\Menu','menu_id','id');
  }
//sub category relation
  public function sub_category()
  {
    return $this->hasMany(SubCategory::class);
  }

  public function products()
  {
    return $this->hasManyThrough(Product::class,SubCategory::class,'id','sub_category_id','id');
  }


}
