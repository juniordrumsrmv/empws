<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResearchTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                if ( !Schema::hasTable('research') ) {

                    Schema::create('research', function(Blueprint $table)
                    {
                            $table->bigInteger('research_key', true)->unsigned();
                            $table->bigInteger('store_key')->unsigned();
                            $table->string('research_name', 50);
                            $table->boolean('research_status')->nullable();
                            $table->date('research_date');
                            $table->boolean('research_type');
                            $table->unique(['store_key','research_date','research_type'], 'index_research');
                            $table->index(['store_key','research_name'], 'index_research_name');
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
		Schema::drop('research');
	}
}
