<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorldCitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('world_cities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('country_id')->unsigned();
			$table->integer('region_id')->unsigned()->nullable()->index('region_id');
			$table->string('name', 256)->default('');
			$table->string('full_name', 256)->nullable();
			$table->string('code', 64)->nullable();
			$table->index(['country_id','region_id','name'], 'uniq_city');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('world_cities');
	}

}
