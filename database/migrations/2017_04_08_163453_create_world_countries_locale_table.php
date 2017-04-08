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
			$table->increments('id')->comment('Auto increase ID');
			$table->integer('country_id')->unsigned()->nullable()->comment('Country ID');
			$table->string('name', 256)->default('')->comment('Localized Country Name');
			$table->string('alias', 256)->nullable()->comment('Localized Country Alias');
			$table->string('abbr', 16)->nullable()->comment('Localized Country Abbr Name');
			$table->string('full_name', 256)->nullable()->comment('Localized Country Fullname');
			$table->string('currency_name', 256)->nullable()->comment('Localized Country Currency Name');
			$table->string('locale', 6)->nullable()->comment('locale');
			$table->unique(['country_id','locale'], 'uniq_locale');
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
