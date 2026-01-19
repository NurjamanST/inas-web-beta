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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id('attendance_id');

            $table->unsignedBigInteger('personal_id');

            $table->string('photo_hash', 255)->nullable();
            $table->dateTime('attendance_date');

            $table->time('check_in')->nullable();
            $table->time('check_out')->nullable();

            $table->enum('status', ['Masuk', 'Pulang', 'Sakit', 'Izin']);
            $table->text('note')->nullable();

            $table->foreign('personal_id')
                  ->references('personal_id')
                  ->on('personals');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
