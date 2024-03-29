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
        Schema::create('esercizios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('muscoli')->nullable();
            $table->string('descrizione')->nullable();
            $table->string('linkFoto')->nullable();
            $table->string('linkVideo')->nullable();
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
        Schema::dropIfExists('esercizios');
    }
};
