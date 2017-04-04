<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorldCitiesLocaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('world_cities_locale', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('city_id')->unsigned()->nullable()->index('city_id');
			$table->string('name', 256)->default('');
			$table->string('alias', 256)->nullable();
			$table->string('full_name', 256)->nullable();
			$table->string('locale', 6)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('world_cities_locale');
	}

}
