<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePizzaAdicionalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pizza_adicionals', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('pizza_id')->unsigned();
            $table->integer('adicional_id')->unsigned();
            $table->timestamps();

            $table->foreign('pizza_id')->references('id')->on('pizzas');
            $table->foreign('adicional_id')->references('id')->on('adicionals');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pizza_adicionals');
	}

}
