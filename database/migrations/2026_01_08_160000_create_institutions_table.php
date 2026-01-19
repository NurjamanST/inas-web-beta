<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->id('institution_id');
            $table->string('institution_name');
            $table->text('address')->nullable();
            $table->string('logo')->nullable();
            $table->decimal('salary', 12, 2);
            $table->enum('type', ['SMK/A', 'Pesantren', 'MBG']);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('institutions');
    }
};
