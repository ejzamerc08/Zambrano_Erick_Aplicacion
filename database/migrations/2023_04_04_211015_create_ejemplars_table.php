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
        Schema::create('ejemplars', function (Blueprint $table) {
            $table->string('codigo');
            $table->primary('codigo');
            $table->string('libro_codigo');
            $table->string('localizacion',15)->nullable()->default('text');
            $table->timestamps();

            $table->foreign('libro_codigo')->references('codigo')->on('libros')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ejemplar');
    }
};
