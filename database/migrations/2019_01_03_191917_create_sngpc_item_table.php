<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSngpcItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('sngpc_item') ) {

                    Schema::create('sngpc_item', function(Blueprint $table)
                    {
                            $table->bigInteger('sngpc_key')->unsigned();
                            $table->bigInteger('plu_key')->unsigned();
                            $table->char('ms_code', 10)->nullable();
                            $table->boolean('therapeutic_class')->nullable();
                            $table->string('medicine_batch', 50);
                            $table->decimal('medicine_quantity', 15, 3);
                            $table->boolean('medicine_use_type')->nullable();
                            $table->string('medicine_use_prolong', 1)->nullable();
                            $table->boolean('reason_type')->nullable()->default(0);
                            $table->string('package_unit_type', 3)->nullable();
                            $table->primary(['sngpc_key','plu_key'], 'index_sngpc_item');
                            $table->index(['sngpc_key','plu_key','ms_code'], 'sngpc_item_index_1');
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
		Schema::drop('sngpc_item');
	}
}
