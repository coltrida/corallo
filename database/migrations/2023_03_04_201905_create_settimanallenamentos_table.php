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
        Schema::create('settimanallenamentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('schedallenamento_id');
            $table->foreign('schedallenamento_id')->on('schedallenamentos')->references('id')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('numero');
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
        Schema::dropIfExists('settimanallenamentos');
    }
};
