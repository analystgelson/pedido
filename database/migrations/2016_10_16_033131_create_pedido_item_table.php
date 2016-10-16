<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_item', function (Blueprint $table) {
            $table->increments('id_pedido_item');
            $table->integer('id_pedido');
            $table->integer('id_cardapio_item');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_pedido')->references('id_pedido')->on('pedido');
            $table->foreign('id_cardapio_item')->references('id_cardapio_item')->on('cardapio_item');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_item');
    }
}
