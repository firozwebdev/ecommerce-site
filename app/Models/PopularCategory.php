<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PopularCategory extends Model
{
  protected $fillable = ['category_id', 'priority', 'status'];

  public function scopeActive($query)
  {
    $query->where('status',1);
  }

  public function category()
  {
    return $this->belongsTo(Category::class,'category_id','id');
  }
}
