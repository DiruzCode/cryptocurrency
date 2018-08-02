<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'firstname' => 'Administrador',
            'lastname' => 'Cybercenter',
            'email' => 'admin@admin.cl',
            'password' => '1234567',
            'remember_token' => str_random(10),
            'status' => 'active',
            'hidden' => true
        ])->roles()->attach([1]);
    }
}
