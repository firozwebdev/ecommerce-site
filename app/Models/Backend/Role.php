<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

use App\Models\Backend\Admin;

class Role extends Model
{

  public function users()
  {
  return $this->belongsToMany(Admin::class);
  }
}
