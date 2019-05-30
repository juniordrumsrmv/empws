<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenuItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('menu_item') ) {
		Schema::create('menu_item', function(Blueprint $table)

		{
			$table->char('menu_item_id', 20)->primary();
			$table->char('menu_item_parent_id', 20)->nullable();
			$table->smallInteger('menu_item_level')->nullable();
			$table->char('menu_item_lang', 6)->nullable();
			$table->char('menu_item_module', 20)->nullable();
			$table->smallInteger('menu_item_group')->nullable();
			$table->smallInteger('menu_item_seq')->nullable();
			$table->char('menu_item_authorization_id', 10)->nullable();
			$table->string('menu_item_href')->nullable();
			$table->string('menu_item_title')->nullable();
			$table->string('menu_item_text')->nullable();
			$table->string('menu_item_img_path')->nullable();
			$table->string('menu_item_target')->nullable();
			$table->string('menu_item_dir')->nullable();
			$table->boolean('menu_item_type')->nullable();
			$table->boolean('menu_item_status')->nullable();
			$table->index(['menu_item_module','menu_item_level','menu_item_parent_id','menu_item_seq','menu_item_lang'], 'index_menu_item_0');
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
		Schema::drop('menu_item');
	}
}
