<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name'=>'Admin User',
            'email'=>'admin' . time() . '@example.com',
            'password'=> Hash::make('password'),
            'role'=>'admin',
        ]);
    }
}
