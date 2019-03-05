<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pedidos', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('pizza_id')->unsigned();
            $table->decimal('valor_total', 16, 4);
            $table->integer('tempo_preparo_total');
            $table->timestamps();

            $table->foreign('pizza_id')->references('id')->on('pizzas');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pedidos');
	}

}
