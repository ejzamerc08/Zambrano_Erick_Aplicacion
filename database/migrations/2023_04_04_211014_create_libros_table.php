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
        Schema::create('libros', function (Blueprint $table) {
            $table->string('codigo')->primary();       
            $table->string('titulo')->nullable();
            $table->string('isbn')->nullable();
            $table->string('autor_codigo');
            $table->unsignedBigInteger('editorial_id');
            $table->integer('paginas')->unsigned()->nullable();
            $table->timestamps();

            //Reeferencia a la tabla foránea
            $table->foreign('autor_codigo')->references('codigo')->on('autors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('editorial_id')->references('id')->on('editorials')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
