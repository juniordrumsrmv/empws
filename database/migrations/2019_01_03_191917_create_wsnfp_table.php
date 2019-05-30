<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWsnfpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('wsnfp') ) {

                    Schema::create('wsnfp', function(Blueprint $table)
                    {
                            $table->bigInteger('wsnfp_key', true)->unsigned();
                            $table->char('file_name', 32);
                            $table->string('cnpj', 20)->nullable();
                            $table->bigInteger('store_key')->unsigned()->nullable();
                            $table->string('ecf_serial', 30)->nullable();
                            $table->date('initial_fiscal_day')->nullable();
                            $table->date('final_fiscal_day')->nullable();
                            $table->boolean('wsnfp_status');
                            $table->dateTime('start_time');
                            $table->dateTime('sent_time')->nullable();
                            $table->dateTime('result_time')->nullable();
                            $table->dateTime('check_time')->nullable();
                            $table->string('rsl_send_hora', 32)->nullable();
                            $table->string('rsl_send_lote', 32)->nullable();
                            $table->string('rsl_send_cod_situacao', 8)->nullable();
                            $table->string('rsl_send_situacao')->nullable();
                            $table->string('rsl_proc_data', 32)->nullable();
                            $table->string('rsl_proc_data_referencia', 32)->nullable();
                            $table->string('rsl_proc_alertas')->nullable();
                            $table->string('rsl_proc_quantidade', 16)->nullable();
                            $table->string('rsl_proc_razao_social')->nullable();
                            $table->string('rsl_proc_observacoes')->nullable();
                            $table->string('rsl_proc_responsavel', 32)->nullable();
                            $table->string('rsl_proc_tipo', 64)->nullable();
                            $table->string('rsl_proc_arquivo', 32)->nullable();
                            $table->string('rsl_proc_hash', 64)->nullable();
                            $table->integer('rsl_proc_tempo')->unsigned()->nullable();
                            $table->integer('rsl_proc_cupons')->unsigned()->nullable();
                            $table->bigInteger('rsl_proc_tamanho')->unsigned()->nullable();
                            $table->decimal('rsl_proc_valor', 10)->nullable();
                            $table->text('rsl_proc_mensagens')->nullable();
                            $table->string('rsl_proc_cod_situacao', 8)->nullable();
                            $table->char('md5', 32)->nullable();
                            $table->index(['file_name','md5'], 'index_wsnfp');
                            $table->index(['store_key','start_time','ecf_serial'], 'index_wsnfp_1');
                            $table->index(['store_key','ecf_serial','initial_fiscal_day','final_fiscal_day'], 'index_wsnfp_2');
                            $table->index(['wsnfp_status','check_time'], 'index_wsnfp_3');
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
		Schema::drop('wsnfp');
	}
}
