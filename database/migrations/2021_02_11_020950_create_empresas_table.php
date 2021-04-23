<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('name',45);
            $table->string('ruc', 45);
            $table->string('direccion', 100);
            $table->string('tlf', 22)->nullable();
            $table->string('cel', 22)->nullable();
            $table->string('logo', 220);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('rubro_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('rubro_id')->references('id')->on('rubros')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
