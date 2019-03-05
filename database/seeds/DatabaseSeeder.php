<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
		 $this->call('AdicionalTableSeeder');
		 $this->call('SaborTableSeeder');
		 $this->call('TamanhoTableSeeder');
	}

}

class AdicionalTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adicionals')->delete();

        \testeUDSAPI\adicional::create(['nome' => 'Extra Bacon','valor' => 3,'tempo_adicional' => 0]);
        \testeUDSAPI\adicional::create(['nome' => 'Sem Cebola','valor' => 0,'tempo_adicional' => 0]);
        \testeUDSAPI\adicional::create(['nome' => 'Borda Recheada','valor' => 5,'tempo_adicional' => 5]);
    }

}

class SaborTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sabors')->delete();

        \testeUDSAPI\sabor::create(['nome' => 'Calabresa','tempo_preparo_adicional' => 0]);
        \testeUDSAPI\sabor::create(['nome' => 'Marguerita','tempo_preparo_adicional' => 0]);
        \testeUDSAPI\sabor::create(['nome' => 'Portuguesa','tempo_preparo_adicional' => 5]);
    }

}

class TamanhoTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tamanhos')->delete();

        \testeUDSAPI\tamanho::create(['nome' => 'Pequena','valor' => 20,'tempo_preparo' => 15]);
        \testeUDSAPI\tamanho::create(['nome' => 'Média','valor' => 30,'tempo_preparo' => 20]);
        \testeUDSAPI\tamanho::create(['nome' => 'Grande','valor' => 40,'tempo_preparo' => 25]);
    }

}
