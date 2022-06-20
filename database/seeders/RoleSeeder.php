<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['admin','secretaire'];
        foreach($roles as $role){
            DB::table('roles')->insert([
                'libele' => $role,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
