<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFiscalStatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('fiscal_status') ) {
		Schema::create('fiscal_status', function(Blueprint $table)

		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->date('fiscal_date');
			$table->integer('ticket_number')->unsigned();
			$table->dateTime('start_time');
			$table->boolean('transaction_type');
			$table->integer('Z_number')->unsigned();
			$table->decimal('initial_GT', 19, 3);
			$table->decimal('final_GT', 19, 3);
			$table->decimal('void', 15, 3);
			$table->decimal('discount', 15, 3);
			$table->decimal('increase', 15, 3);
			$table->bigInteger('cashier_key')->unsigned()->nullable();
			$table->bigInteger('authorizer_key')->unsigned()->nullable();
			$table->smallInteger('ecf_number')->unsigned();
			$table->integer('initial_ticket')->unsigned();
			$table->integer('restart_count')->unsigned();
			$table->integer('quantity_void')->unsigned()->nullable();
			$table->integer('quantity_discount')->unsigned()->nullable();
			$table->integer('quantity_sale')->unsigned()->nullable();
			$table->integer('quantity_void_life')->unsigned()->nullable();
			$table->integer('quantity_nfnv')->unsigned()->nullable();
			$table->integer('quantity_void_nfnv')->unsigned()->nullable();
			$table->integer('quantity_report')->unsigned()->nullable();
			$table->integer('quantity_ribbon_detail')->unsigned()->nullable();
			$table->integer('quantity_nfv_tef')->unsigned()->nullable();
			$table->integer('initial_ticket_fiscal')->unsigned()->nullable();
			$table->integer('finish_ticket_fiscal')->unsigned()->nullable();
			$table->string('time_printing_cupons', 20)->nullable();
			$table->string('total_time', 20)->nullable();
			$table->integer('quantity_report_x')->unsigned()->nullable();
			$table->integer('quantity_left_z')->unsigned()->nullable();
			$table->string('ecf_mfd', 30)->nullable();
			$table->string('ecf_serial', 30)->nullable();
			$table->string('ecf_version', 20)->nullable();
			$table->string('ecf_model', 40)->nullable();
			$table->string('ecf_manufacturer', 40)->nullable();
			$table->dateTime('date_alter')->nullable();
			$table->bigInteger('user_key')->unsigned()->nullable();
			$table->boolean('status_inc')->nullable()->default(0);
			$table->bigInteger('quantity_mfd_bytes')->unsigned()->nullable()->default(0);
			$table->bigInteger('quantity_mfd_left_bytes')->unsigned()->nullable()->default(0);
			$table->primary(['store_key','pos_number','ticket_number','start_time'], 'index_fiscal_status');
			$table->index(['store_key','ecf_number','ticket_number','start_time'], 'index_ecf_status');
			$table->index(['store_key','ecf_number','fiscal_date','start_time','ticket_number'], 'index_ecf_status_1');
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
		Schema::drop('fiscal_status');
	}
}
