<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('desafios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('recompensa');
            $table->string('dificultad');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('desafios');
    }
};
