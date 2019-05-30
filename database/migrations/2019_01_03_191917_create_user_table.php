<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('user') ) {

                    Schema::create('user', function(Blueprint $table)
                    {
                            $table->bigInteger('agent_key')->unsigned()->primary();
                            $table->string('alternate_id', 10)->nullable()->unique('index_user_alternate_id');
                            $table->string('password', 100)->nullable();
                            $table->char('language', 2)->nullable();
                            $table->string('email', 50)->nullable();
                            $table->decimal('clerk_percent', 4)->nullable();
                            $table->bigInteger('pos_load_last_store_key')->unsigned()->nullable();
                            $table->smallInteger('pos_load_last_pos_number')->unsigned()->nullable();
                            $table->dateTime('pos_load_last_time')->nullable();
                            $table->bigInteger('pos_save_last_store_key')->unsigned()->nullable();
                            $table->smallInteger('pos_save_last_pos_number')->unsigned()->nullable();
                            $table->dateTime('pos_save_last_time')->nullable();
                            $table->bigInteger('store_key')->unsigned();
                            $table->string('usr_mode', 12)->nullable();
                            $table->string('treatment', 64)->nullable();
                            $table->string('sms', 20)->nullable();
                            $table->string('user_ident', 25)->nullable();
                            $table->date('user_birthday')->nullable();
                            $table->boolean('user_status')->default(0);
                            $table->string('cript_password', 50)->nullable();
                            $table->date('expiration_date')->nullable();
                            $table->boolean('security_level')->nullable();
                            $table->binary('biometrics', 65535)->nullable();
                            $table->dateTime('last_change_time')->nullable();
                            $table->date('user_date_inc')->nullable();
                            $table->date('user_date_alt_status')->nullable();
                            $table->string('matriculation', 32)->nullable()->index('index_matr');
                            $table->date('user_date_inactive_status')->nullable();
                            $table->boolean('user_trace')->nullable();
                            $table->string('user_trace_file')->nullable();
                            $table->string('user_db_user')->nullable();
                            $table->string('user_db_pass')->nullable();
                            $table->boolean('user_color_set')->nullable();
                            $table->string('user_bgcolor1', 16)->nullable();
                            $table->string('user_bgcolor2', 16)->nullable();
                            $table->string('user_bgcolor3', 16)->nullable();
                            $table->string('user_bgcolor4', 16)->nullable();
                            $table->string('user_bgcolor5', 16)->nullable();
                            $table->string('user_bgcolor6', 16)->nullable();
                            $table->string('user_txcolor1', 16)->nullable();
                            $table->string('user_txcolor2', 16)->nullable();
                            $table->boolean('user_tr_hover')->nullable();
                            $table->smallInteger('user_lines_per_screen')->nullable();
                            $table->boolean('user_menu_layout')->nullable();
                            $table->boolean('user_theme_option')->nullable();
                            $table->string('user_theme')->nullable();
                            $table->boolean('user_enable_config_options')->nullable();
                            $table->boolean('count_error')->nullable();
                            $table->dateTime('block_date')->nullable();
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
		Schema::drop('user');
	}
}
