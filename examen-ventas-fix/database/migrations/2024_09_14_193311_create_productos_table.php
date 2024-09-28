<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
            $table->string(column: 'sku')->unique();
            $table->string(column: 'nombre');
            $table->string(column: 'descripcion_corta');
            $table->string(column: 'descripcion_larga');
            $table->string(column: 'imagen_producto')->nullable();
            $table->integer(column: 'precio_neto');
            $table->integer(column: 'precio_venta');
            $table->integer(column: 'stock_actual');
            $table->integer(column: 'stock_minimo');
            $table->integer(column: 'stock_bajo');
            $table->integer(column: 'stock_alto');
            $table->timestamps();
        });

        DB::table(table: 'productos')->insert([
            [
                'sku' => 'c0d1g0',
                'nombre' => 'Producto 1',
                'descripcion_corta'=> 'Descripción Corta',
                'descripcion_larga' => 'Descripción Larga',
                'imagen_producto'=> null,
                'precio_neto'=> '10',
                'precio_venta'=> '10',
                'stock_actual'=> '10',
                'stock_minimo'=> '1',
                'stock_bajo'=> '1',
                'stock_alto'=> '10',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
