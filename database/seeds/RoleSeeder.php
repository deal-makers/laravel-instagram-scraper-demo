<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role = Role::create(['name' => 'Administrator']);
      $role->syncPermissions(['permission.admin']);
      $role = Role::create(['name' => 'User']);
      $role->syncPermissions(['permission.user']);
    }
}
