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
            $table->string(column: 'sku');
            $table->string(column: 'nombre');
            $table->string(column: 'descripcion_corta');
            $table->string(column: 'descripcion_larga');
            $table->string(column: 'imagen_producto');
            $table->integer(column: 'precio_neto');
            $table->integer(column: 'precio_venta');
            $table->integer(column: 'stock_actual');
            $table->integer(column: 'stock_minimo');
            $table->integer(column: 'stock_bajo');
            $table->integer(column: 'stock_alto');
            $table->timestamps();
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
