<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNcmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('ncm') ) {
		Schema::create('ncm', function(Blueprint $table)

		{
			$table->bigInteger('ncm_key')->unsigned();
			$table->boolean('ncm_ex')->default(0);
			$table->string('description', 60);
			$table->string('unit', 10)->nullable();
			$table->boolean('ncm_table')->nullable();
			$table->decimal('ncm_aliqnac', 5)->nullable();
			$table->decimal('ncm_aliqimp', 5)->nullable();
			$table->decimal('ncm_aliqstate', 5)->nullable();
			$table->decimal('ncm_aliqmunicipal', 5)->nullable();
			$table->date('ncm_vigbegin')->nullable();
			$table->date('ncm_vigend')->nullable();
			$table->string('ncm_code', 30)->nullable();
			$table->string('ncm_version', 30)->nullable();
			$table->string('ncm_source', 20)->nullable();
			$table->primary(['ncm_key','ncm_ex'], 'index_ncm');
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
		Schema::drop('ncm');
	}
}
