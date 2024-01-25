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
            $table->string('plate', 64);
            $table->unsignedBigInteger('mechanic_id')->nullable(); //reikalingas apjungiant lenteles, per ID susiejam. Rysi daro mechanic_id stulpelis su references id mechaniku lenteleje.
            $table->foreign('mechanic_id')->references('id')->on('mechanics'); //rysio aprasas
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
