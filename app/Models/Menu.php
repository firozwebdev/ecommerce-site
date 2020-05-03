<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// Models
use App\Models\Category;
use App\Models\Product;

class Menu extends Model
{
      protected $fillable =["name","description","menu_icon","slug","status"];
//categories relation
      public function categories()
      {
        // return $this->belongsToMany(self::class,'categories','id','menu_id');
        return $this->hasMany(Category::class);
      }
//product relation
      public function products()
      {
        return $this->belongsToMany(Product::class,'categories','id','menu_id')->paginate(2);
      }




}
