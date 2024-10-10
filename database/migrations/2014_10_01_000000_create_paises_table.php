<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('paises', function (Blueprint $table) {
            $table->char('codigoISO3', 3)->primary();
            $table->char('codigoISO2', 2);
            $table->decimal('cod_numerico', '3', '0');
            $table->string('nombre', '50');

            $table->unique('codigoISO2');
            $table->unique('cod_numerico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('paises');
    }
}
