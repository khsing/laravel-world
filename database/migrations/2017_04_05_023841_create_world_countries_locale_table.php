<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorldCountriesLocaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('world_countries_locale', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('country_id')->unsigned()->nullable()->index('country_id');
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
		Schema::drop('world_countries_locale');
	}

}
