<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorldContinentsLocaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('world_continents_locale', function(Blueprint $table)
		{
			$table->increments('id')->comment('Auto increase ID');
			$table->integer('continent_id')->unsigned()->nullable()->comment('Continent ID');
			$table->string('name', 256)->nullable()->comment('Localized Name');
			$table->string('alias', 256)->nullable()->comment('Localized Alias');
			$table->string('abbr', 16)->nullable()->comment('Localized Abbr name');
			$table->string('full_name', 256)->nullable()->comment('Localized Fullname');
			$table->string('locale', 6)->nullable()->comment('Locale');
			$table->unique(['continent_id','locale'], 'uniq_locale');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('world_continents_locale');
	}

}
