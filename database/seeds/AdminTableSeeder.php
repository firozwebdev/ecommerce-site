<?php

use Illuminate\Database\Seeder;

use App\Models\Backend\Admin;
use App\Models\Backend\Role;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_admin = Role::where('name', 'admin')->first();
      $role_seller = Role::where('name', 'seller')->first();

      $superadmin = new Admin();
      $superadmin->name = 'Super Admin';
      $superadmin->email = 'superadmin@admin.com';
      $superadmin->password = bcrypt('123456');

      $superadmin->status = 1;
      $superadmin->save();
      $superadmin->roles()->attach($role_admin);

      $seller = new Admin();
      $seller->name = 'Demo Seller';
      $seller->email = 'seller@admin.com';
      $seller->password = bcrypt('123456');
      $seller->status = 1;
      $seller->save();
      $seller->roles()->attach($role_seller);

    }
}
