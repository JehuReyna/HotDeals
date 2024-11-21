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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nomprod');
            $table->string('fotoprod');
            $table->string('marca');
            $table->string('descripcion');
            $table->double('precio');
            $table->unsignedBigInteger('punto_de_venta_id');
            $table->timestamps();

            $table->foreign('punto_de_venta_id')->references('id')->on('puntosdeventa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
