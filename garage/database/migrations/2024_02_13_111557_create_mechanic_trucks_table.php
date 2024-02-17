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
        Schema::create('fmechanic_trucks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mechanic_id');
            $table->unsignedBigInteger('truck_id');
            $table->unique(['mechanic_id', 'truck_id']); //unikalus indeksas
            $table->foreign('mechanic_id')->references('id')->on('mechanics')->ondDelete('cascade');
            $table->foreign('truck_id')->references('id')->on('trucks')->ondDelete('cascade');; //rysio aprasas

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mechanic_trucks');
    }
};
