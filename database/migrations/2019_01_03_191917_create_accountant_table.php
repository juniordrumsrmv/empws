<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccountantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    if ( !Schema::hasTable('accountant') ) {

      Schema::create('accountant', function(Blueprint $table)
      {
        $table->bigInteger('accountant_key')->unsigned()->primary();
        $table->string('name', 60);
        $table->string('cnpj_cpf', 25);
        $table->string('crc', 30);
        $table->string('cep', 12);
        $table->string('logradouro', 50);
        $table->smallInteger('numero')->unsigned();
        $table->string('complemento', 20);
        $table->string('bairro', 20);
        $table->string('telefone', 15);
        $table->string('fax', 15);
        $table->string('email', 50);
        $table->integer('store_city_code')->unsigned();
      });

    }
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('accountant');
	}
}
