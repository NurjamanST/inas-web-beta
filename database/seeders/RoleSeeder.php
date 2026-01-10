<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // SuperAdmin,
        Role::create(['role_name' => 'SuperAdmin', 'description' => 'Memiliki akses penuh ke seluruh sistem']); 
        // Admin SMK/A, 
        Role::create(['role_name' => 'Admin SMK/A', 'description' => 'Mengelola data dan operasional SMK/A']);
        // Admin Pesantren, 
        Role::create(['role_name' => 'Admin Pesantren', 'description' => 'Mengelola data dan operasional Pesantren']);
        // Admin MBG
        Role::create(['role_name' => 'Admin MBG', 'description' => 'Mengelola data dan operasional MBG']);
    }
}