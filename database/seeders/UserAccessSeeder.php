<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserAccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_accesses')->insert([
            [
                'users_id' => 1,
                'access_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'users_id' => 1,
                'access_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'users_id' => 1,
                'access_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'users_id' => 1,
                'access_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'users_id' => 1,
                'access_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'users_id' => 2,
                'access_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'users_id' => 2,
                'access_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
