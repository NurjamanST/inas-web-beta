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
        Schema::create('activities', function (Blueprint $table) {
             $table->id('activity_id');

            $table->unsignedBigInteger('institution_id');

            $table->string('activity_name', 100);
            $table->dateTime('activity_date');
            $table->text('description')->nullable();

            $table->foreign('institution_id')
                  ->references('institution_id')
                  ->on('institutions');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
