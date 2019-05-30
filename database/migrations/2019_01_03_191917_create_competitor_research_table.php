<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompetitorResearchTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if ( !Schema::hasTable('competitor_research') ) {
		Schema::create('competitor_research', function(Blueprint $table)

		{
			$table->bigInteger('research_key')->unsigned()->index('index_research_key');
			$table->bigInteger('store_key')->unsigned();
			$table->bigInteger('compet_key')->unsigned();
			$table->bigInteger('plu_key')->unsigned();
			$table->decimal('price', 15, 3)->nullable();
			$table->date('research_date');
			$table->index(['store_key','compet_key','plu_key','research_date','research_key'], 'index_research_competitor');
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
		Schema::drop('competitor_research');
	}
}
