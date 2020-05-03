<?php

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\Viewable;
use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;
use Nicolaslopezj\Searchable\SearchableTrait;
use Laravel\Scout\Searchable;



class Product extends Model implements ViewableContract
{
  use Viewable;
  use SearchableTrait;
  // use Searchable;


  protected $removeViewsOnDelete = true;


  protected $searchable = [
        'columns' => [
            'products.product_name' =>50,
            'products.id' =>0,
        ]
    ];


  protected $fillable = ['seller_id','product_name', 'product_title','sub_category_id','product_price',
  'special_price','discount','start_date','end_date','sku','stock','base_image','multiple[]','description','color[]','size[]','warrantly','status']; //only the field names inside the array can be mass-assign

  // public function searchableAs()
  //   {
  //       return 'users_index';
  //   }

  public function sub_category(){
        return $this->belongsTo('App\Models\SubCategory','sub_category_id','id');
  }

   public function category()
   {
     return $this->hasMany('App\Models\SubCategory','sub_category_id','id');

   }


}
