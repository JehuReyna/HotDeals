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
        Schema::create('puntosdeventa', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('foto')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('ubicacion')->nullable();
            $table->decimal('latitude', 10,7);
            $table->decimal('longitude', 10,7);
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('puntosdeventa');
    }
};
