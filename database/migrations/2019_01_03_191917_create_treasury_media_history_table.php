<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTreasuryMediaHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('treasury_media_history') ) {

                    Schema::create('treasury_media_history', function(Blueprint $table)
                    {
                            $table->bigInteger('store_key')->unsigned();
                            $table->smallInteger('location')->unsigned();
                            $table->smallInteger('media_id')->unsigned();
                            $table->smallInteger('extended_media_id')->unsigned();
                            $table->decimal('amount', 15, 3);
                            $table->decimal('amount_new', 15, 3);
                            $table->dateTime('date_alter');
                            $table->bigInteger('user_key')->nullable();
                            $table->boolean('reason_type_key')->nullable()->default(0);
                            $table->smallInteger('trans_type')->nullable()->default(0);
                            $table->primary(['store_key','location','extended_media_id','date_alter'], 'index_treasury_media_history');
                            $table->index(['store_key','location','media_id'], 'index_treasury_media_history');
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
		Schema::drop('treasury_media_history');
	}
}
