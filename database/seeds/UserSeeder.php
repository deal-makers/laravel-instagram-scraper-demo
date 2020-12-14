<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\Models\User::create([
            'name' => 'SuperAdmin',
            'firstname' => 'Super',
            'lastname' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'status' => 'activated',
        ]);
        $user->assignRole('Administrator');
    }
}
