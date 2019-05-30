<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatusSefazTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('status_sefaz') ) {

                    Schema::create('status_sefaz', function(Blueprint $table)
                    {
                            $table->smallInteger('status_key')->unsigned()->primary();
                            $table->string('status_desc', 250);
                            $table->text('status_faq');
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
		Schema::drop('status_sefaz');
	}
}
