<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePosCpuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('pos_cpu') ) {
		Schema::create('pos_cpu', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->boolean('processor_number');
			$table->string('vendor_id')->nullable();
			$table->smallInteger('cpu_family')->unsigned()->nullable();
			$table->smallInteger('model')->unsigned()->nullable();
			$table->string('model_name')->nullable();
			$table->smallInteger('stepping')->unsigned()->nullable();
			$table->decimal('cpu_mhz', 12)->nullable();
			$table->string('cache_size')->nullable();
			$table->boolean('physical_id')->nullable();
			$table->boolean('siblings')->nullable();
			$table->boolean('core_id')->nullable();
			$table->boolean('cpu_cores')->nullable();
			$table->string('fpu', 8)->nullable();
			$table->string('fpu_exception', 8)->nullable();
			$table->boolean('cpuid_level')->nullable();
			$table->string('wp', 8)->nullable();
			$table->string('flags')->nullable();
			$table->decimal('bogomips', 12)->nullable();
			$table->smallInteger('clflush_size')->unsigned()->nullable();
			$table->primary(['store_key','pos_number','processor_number'], 'index_pos_cpu');
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
		Schema::drop('pos_cpu');
	}
}
