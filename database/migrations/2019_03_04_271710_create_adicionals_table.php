<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdicionalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('adicionals', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('nome', 30);
            $table->decimal('valor', 16, 4);
            $table->integer('tempo_adicional');
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
		Schema::drop('adicionals');
	}

}
