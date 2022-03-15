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
        Schema::create('addresses', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->bigIncrements('id');
            $table->string('cep', 9);
            $table->string('endereco', 50);
            $table->integer('numero');
            $table->string('bairro', 40);
            $table->string('complemento', 30)->nullable();
            $table->string('estado', 20);
            $table->string('cidade', 40);
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
        Schema::dropIfExists('address');
    }
};
