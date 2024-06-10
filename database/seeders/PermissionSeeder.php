<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->insert([
            [
                'permission_name' => 'Create',
                'permission_description' => 'Create permission',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'permission_name' => 'Read',
                'permission_description' => 'Read permission',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'permission_name' => 'Update',
                'permission_description' => 'Update permission',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'permission_name' => 'Delete',
                'permission_description' => 'Delete permission',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
