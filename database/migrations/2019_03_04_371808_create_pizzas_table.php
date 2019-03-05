<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePizzasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pizzas', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('sabor_id')->unsigned();
            $table->integer('tamanho_id')->unsigned();
			$table->timestamps();

            $table->foreign('sabor_id')->references('id')->on('sabors');
            $table->foreign('tamanho_id')->references('id')->on('tamanhos');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pizzas');
	}

}
