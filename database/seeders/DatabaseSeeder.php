<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Access;
use App\Models\Permission;
use App\Models\UserAccess;
use App\Models\RolePermission;
use Illuminate\Database\Seeder;
use Database\Seeders\AccessRoleSeeder;
use Database\Seeders\PersonalIdentitySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            AccessSeeder::class,
            RoleSeeder::class,
            PermissionSeeder::class,
            UserAccessSeeder::class,
            AccessRoleSeeder::class,
            RolePermissionSeeder::class,
            PersonalIdentitySeeder::class,
        ]);
    }
}
