<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->id('personal_id');

            $table->unsignedBigInteger('institution_id');

            $table->string('rfid_uid', 50);
            $table->string('full_name', 100);

            $table->enum('gender', ['L', 'P']);
            $table->enum('position', ['Siswa', 'Guru', 'Santri', 'Karyawan']);

            $table->string('class', 50)->nullable();

            $table->longText('address')->nullable();
            $table->longText('description')->nullable();

            // Foreign Key
            $table->foreign('institution_id')
                  ->references('institution_id')
                  ->on('institutions')
                  ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
