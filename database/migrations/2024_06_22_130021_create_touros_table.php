<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourosTable extends Migration
{
    public function up()
    {
        Schema::create('touros', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('idade');
            $table->string('raça');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('touros');
    }
}
