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
        Schema::create('salaries', function (Blueprint $table) {
            $table->id('salary_id');

            $table->unsignedBigInteger('personal_id');

            $table->dateTime('salary_date');
            $table->decimal('amount', 12, 2);
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
        Schema::dropIfExists('salaries');
    }
};
