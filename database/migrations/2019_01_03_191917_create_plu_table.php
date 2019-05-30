<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePluTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('plu') ) {
		Schema::create('plu', function(Blueprint $table)

		{
			$table->bigInteger('plu_key', true)->unsigned();
			$table->bigInteger('id')->unsigned()->unique('index_plu_id');
			$table->bigInteger('base_plu_key')->unsigned()->nullable()->index('index_plu_base');
			$table->bigInteger('link_plu_key')->unsigned()->nullable();
			$table->smallInteger('plu_types')->unsigned()->nullable();
			$table->bigInteger('maker_key')->unsigned()->nullable();
			$table->string('short_description', 48)->nullable();
			$table->string('long_description', 50)->nullable();
			$table->string('commercial_description', 50)->nullable();
			$table->string('image_file')->nullable();
			$table->integer('tax_type_key')->unsigned()->nullable();
			$table->smallInteger('cost_decimals')->unsigned()->nullable();
			$table->smallInteger('unit_key')->unsigned()->nullable();
			$table->smallInteger('price_decimals')->unsigned()->nullable();
			$table->bigInteger('adder')->unsigned()->nullable();
			$table->smallInteger('department_key')->unsigned()->nullable();
			$table->string('suggested_prompt', 80)->nullable();
			$table->integer('data_entry_key')->unsigned()->nullable();
			$table->integer('tare_key')->unsigned()->nullable();
			$table->dateTime('last_change_time')->nullable()->index('index_plu_change');
			$table->decimal('clerk_percent', 4)->nullable();
			$table->boolean('conecto_flag_00')->nullable();
			$table->boolean('has_deposit')->nullable();
			$table->boolean('has_plu_link')->nullable();
			$table->boolean('price_required')->nullable();
			$table->boolean('quantity_disallowed')->nullable();
			$table->boolean('quantity_required')->nullable();
			$table->boolean('decimal_disallowed')->nullable();
			$table->boolean('decimal_required')->nullable();
			$table->boolean('id_required')->nullable();
			$table->boolean('repeat_disallowed')->nullable();
			$table->boolean('scale')->nullable();
			$table->boolean('tracking_total')->nullable();
			$table->boolean('deposit')->nullable();
			$table->boolean('non_merchandise')->nullable();
			$table->boolean('return_disallowed')->nullable();
			$table->boolean('refund_disallowed')->nullable();
			$table->boolean('markdown_disallowed')->nullable();
			$table->boolean('rebate')->nullable();
			$table->boolean('not_for_sale')->nullable();
			$table->boolean('negative')->nullable();
			$table->boolean('clerk_required')->nullable();
			$table->boolean('kit')->nullable();
			$table->boolean('conecto_flag_22')->nullable();
			$table->boolean('conecto_flag_23')->nullable();
			$table->boolean('conecto_flag_24')->nullable();
			$table->boolean('qty_from_amount')->nullable();
			$table->boolean('conecto_flag_26')->nullable();
			$table->boolean('conecto_flag_27')->nullable()->index('index_plu_completion');
			$table->boolean('conecto_flag_28')->nullable();
			$table->boolean('conecto_flag_29')->nullable();
			$table->boolean('conecto_flag_30')->nullable();
			$table->boolean('conecto_flag_31')->nullable();
			$table->smallInteger('valid_days')->unsigned()->nullable();
			$table->string('fiscal_class', 12)->nullable();
			$table->boolean('pis_cofins')->nullable();
			$table->decimal('quantity', 9, 3)->nullable();
			$table->decimal('quantity_min', 9, 3)->nullable();
			$table->decimal('quantity_max', 9, 3)->nullable();
			$table->string('class', 25)->nullable();
			$table->smallInteger('merchandise_origin')->unsigned()->nullable();
			$table->bigInteger('merchandise_group')->unsigned()->nullable();
			$table->char('package', 6)->nullable();
			$table->decimal('wholesale_quantity', 9, 3)->nullable();
			$table->boolean('conecto_flag_32')->nullable();
			$table->boolean('conecto_flag_33')->nullable();
			$table->boolean('conecto_flag_34')->nullable();
			$table->boolean('conecto_flag_35')->nullable();
			$table->boolean('conecto_flag_36')->nullable();
			$table->boolean('conecto_flag_37')->nullable();
			$table->boolean('conecto_flag_38')->nullable();
			$table->boolean('conecto_flag_39')->nullable();
			$table->boolean('conecto_flag_40')->nullable();
			$table->string('message_subtotal')->nullable();
			$table->smallInteger('standard_unit_key')->unsigned()->nullable();
			$table->decimal('quantity_standard', 9, 3)->nullable();
			$table->decimal('gross_weight', 7, 3)->nullable();
			$table->decimal('net_weight', 7, 3)->nullable();
			$table->decimal('total_tax', 7, 3)->nullable();
			$table->char('sefaz_id', 10)->nullable();
			$table->decimal('self_checkout_weight', 7, 3)->nullable();
			$table->char('anp_code', 10)->nullable();
			$table->integer('pis_tax_type_key')->unsigned()->nullable();
			$table->integer('cofins_tax_type_key')->unsigned()->nullable();
			$table->decimal('total_tax1', 7, 3)->nullable();
			$table->decimal('total_tax2', 7, 3)->nullable();
			$table->string('cest_code', 12)->nullable();
			$table->boolean('therapeutic_class')->nullable();
			$table->bigInteger('ms_code')->unsigned()->nullable();
			$table->bigInteger('dcb_code')->unsigned()->nullable();
			$table->string('dcb_description', 48)->nullable();
			$table->string('package_layout', 25)->nullable();
			$table->string('package_unit_type', 3)->nullable();
			$table->string('pharma_list_type', 10)->nullable();
			$table->decimal('fcp_percent', 15, 3)->nullable();
			$table->string('benef_code', 16)->nullable();
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
		Schema::drop('plu');
	}
}
