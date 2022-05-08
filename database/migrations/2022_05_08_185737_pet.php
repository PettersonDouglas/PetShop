<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet', function (Blueprint $table) {
            $table->foreign('tutor_id')->references('id')-> on('tutor');
            $table->increments ('id') ;
            $table->string('name');
            $table->foreign('tipoPet_id')->references('id')-> on('tipoPet');
            $table->date('dataNasc');
            $table->string('cor');
            $table->boolean('reproduz');
            $table->boolean('registrado');
            $table->string('alergias')->nullable();
            $table->rememberToken();
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
        //
    }
}
