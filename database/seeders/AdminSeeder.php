<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => 1,
            'firstname' => 'kabore',
            'lastname' => 'ismael',
            'email'=> 'ismael@gmail.com',
            'password' =>  Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
