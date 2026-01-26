<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Account::create([
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('123456789'),
            'role_id' => 1
        ]);
        Account::create([
            'institution_id' => 1,
            'email' => 'smk@gmail.com',
            'password' => Hash::make('123456789'),
            'role_id' => 2
        ]);
        Account::create([
            'institution_id' => 1,
            'email' => 'pesantren@gmail.com',
            'password' => Hash::make('123456789'),
            'role_id' => 3
        ]);
        Account::create([
            'institution_id' => 1,
            'email' => 'mbg@gmail.com',
            'password' => Hash::make('123456789'),
            'role_id' => 4
        ]);
    }
}
