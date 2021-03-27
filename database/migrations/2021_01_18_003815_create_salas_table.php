<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url')->unique();
            $table->string('ceo');
            $table->integer('cantidad')->nullable();
            $table->integer('operando1')->nullable();
            $table->integer('operando2')->nullable();
            $table->integer('operando3')->nullable();
            $table->integer('operando4')->nullable();
            $table->integer('operando5')->nullable();
            $table->integer('operando6')->nullable();
            $table->integer('operando7')->nullable();
            $table->integer('operando8')->nullable();
            $table->integer('operando9')->nullable();
            $table->string('operador1')->nullable();
            $table->string('operador2')->nullable();
            $table->string('operador3')->nullable();
            $table->string('operador4')->nullable();
            $table->string('operador5')->nullable();
            $table->string('operador6')->nullable();
            $table->string('operador7')->nullable();
            $table->string('operador8')->nullable();
            $table->string('operador9')->nullable();
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
        Schema::dropIfExists('salas');
    }
}
