<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardapioItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardapio_item', function (Blueprint $table) {
                $table->increments('id_cardapio_item');
                $table->integer('id_cardapio');
                $table->timestamps();
                $table->softDeletes();
                $table->foreign('id_cardapio')->references('id_cardapio')->on('cardapio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cardapio_item');
    }
}
