<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Institution;

class InstitutionSeeder extends Seeder
{
    public function run(): void
    {

        Institution::create([
            'institution_name' => 'PT Makan Bersama (Kantor Pusat)',
            'type' => 'MBG', // Contoh
            'address' => 'Kota Tasikmalaya, Indonesia',
            'salary' => '100000',
            'is_active' => 1
        ]);
    }
}
