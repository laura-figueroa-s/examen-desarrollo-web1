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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('rut_empresa')->unique();
            $table->string('rubro');
            $table->string('razon_social');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('nombre_persona_contacto');
            $table->string('email_persona_contacto');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('clientes')->insert([
            [
                'rut_empresa' => '123456-7',
                'rubro' => 'Rubro',
                'razon_social'=> 'Empresa bonita :)',
                'telefono' => '9123456',
                'direccion'=> 'Av. Libertador Bernardo OHiggins 2221',
                'nombre_persona_contacto'=> 'Persona de Contacto',
                'email_persona_contacto'=> 'contacto@empresa.cl',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
