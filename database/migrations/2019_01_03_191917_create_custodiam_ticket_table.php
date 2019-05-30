<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustodiamTicketTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('custodiam_ticket') ) {
		Schema::create('custodiam_ticket', function(Blueprint $table)

		{
			$table->bigInteger('nCnpj');
			$table->boolean('cUF');
			$table->boolean('nMod');
			$table->integer('nSerieSAT');
			$table->integer('cCFe');
			$table->bigInteger('cNF');
			$table->boolean('cDv');
			$table->dateTime('dhEmi');
			$table->string('nNumeroCaixa', 64);
			$table->string('cID', 50);
			$table->decimal('fVCFe', 15, 3)->nullable();
			$table->boolean('sStatus');
			$table->text('iRslMessage', 65535)->nullable();
			$table->string('iRslCode', 64)->nullable();
			$table->integer('iConcEmp')->nullable();
			$table->integer('iConcSfz')->nullable();
			$table->integer('iConcFio')->nullable();
			$table->dateTime('szMoveTime')->nullable();
			$table->dateTime('szSendTime')->nullable();
			$table->string('NRec', 64)->nullable();
			$table->dateTime('dhEnvioLote')->nullable();
			$table->dateTime('dhProcessamento')->nullable();
			$table->string('Situacao')->nullable();
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
		Schema::drop('custodiam_ticket');
	}
}
