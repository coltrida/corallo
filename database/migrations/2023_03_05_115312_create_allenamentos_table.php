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
        Schema::create('allenamentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('giornoallenamento_id');
            $table->foreign('giornoallenamento_id')->on('giornoallenamentos')->references('id')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('esercizio_id');
            $table->integer('ripetizioni');
            $table->integer('serie');
            $table->time('duration');
            $table->time('rest');
            $table->integer('peso')->nullable();
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
        Schema::dropIfExists('allenamentos');
    }
};
