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
        Schema::create('accidentes', function (Blueprint $table) {
            $table->id();
            $table->string('hora');
            $table->bigInteger('codigo');
            $table->string('fecha');
            $table->string('lugar');
            $table->unsignedBigInteger('persona_id');
            $table->timestamps();

            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accidentes');
    }
};
