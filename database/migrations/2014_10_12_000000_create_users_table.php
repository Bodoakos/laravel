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
        Schema::create('adatok', function (Blueprint $table) {
            $table->id();
            $table->string('Név');
            $table->string('Márka');
            $table->date("Évjárat");
            $table->integer("km");
            $table->integer("Max km/h");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adatok');
    }
};
