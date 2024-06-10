<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('accesses')->insert([
            [
                'access_name' => 'Admin Dashboard',
                'access_description' => 'Admin Dashboard access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'access_name' => 'User Management',
                'access_description' => 'User Management access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'access_name' => 'Role Management',
                'access_description' => 'Role Management access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'access_name' => 'Permission Management',
                'access_description' => 'Permission Management access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'access_name' => 'Access Management',
                'access_description' => 'Access Management access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'access_name' => 'User Dashboard',
                'access_description' => 'User Dashboard access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'access_name' => 'Identity Management',
                'access_description' => 'Identity Management access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
