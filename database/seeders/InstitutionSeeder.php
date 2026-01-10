<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Institution;

class InstitutionSeeder extends Seeder
{
    public function run(): void
    {


        // $table->id('institution_id');
        // $table->string('institution_name');
        // $table->text('address')->nullable();
        // $table->string('logo')->nullable();
        // $table->enum('type', ['SMK/A', 'Pesantren', 'MBG']);
        // $table->boolean('is_active')->default(true);
        // $table->timestamps();

        Institution::create([
            'institution_name' => 'PT Makan Bersama (Kantor Pusat)',
            'type' => 'MBG', // Contoh
            'address' => 'Kota Tasikmalaya, Indonesia'
        ]);
    }
}