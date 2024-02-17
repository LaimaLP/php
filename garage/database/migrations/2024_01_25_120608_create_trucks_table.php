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
    { //i lentele perduodam duomenis, kurios noresim siusti i DB
        Schema::create('trucks', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 64);
            $table->string('plate', 10);
          
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trucks');
    }
};
