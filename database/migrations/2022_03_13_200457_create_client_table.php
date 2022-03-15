<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('cpf', 11);
            $table->string('rg', 9);
            $table->date('data_nascimento');
            $table->char('sexo');
            $table->string('telefone', 11);
            $table->string('celular', 11);
            $table->bigInteger('address_id')->unsigned();
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('client');
    }
};
