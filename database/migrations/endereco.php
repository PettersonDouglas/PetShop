<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Endereco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco', function (Blueprint $table) {
           
            $table->id();
            $table->number('cep',9);
            $table->string('UF');
            $table->string('cidade');
            $table->string('Bairro');
            $table->string('rua',50);
            $table->integer('numero');
            $table->string('complemento');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
