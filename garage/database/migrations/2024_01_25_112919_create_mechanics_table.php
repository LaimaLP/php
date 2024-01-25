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
    {//taip perduodame info i DB.
        Schema::create('mechanics', function (Blueprint $table) {
            $table->id(); //(automatiskai didinasi)
            $table->string('name', 64); //(mechaniko vardas, varcharas, 64 ilgio)
            $table->string('surname', 64);
            $table->timestamps(); //(data, sukuria du stelpelius)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mechanics');
    }
};
