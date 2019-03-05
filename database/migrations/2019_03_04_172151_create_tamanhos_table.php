<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTamanhosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tamanhos', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('nome', 30);
            $table->decimal('valor', 16, 4);
            $table->integer('tempo_preparo');
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
		Schema::drop('tamanhos');
	}

}
