<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWorldCitiesLocaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('world_cities_locale', function(Blueprint $table)
		{
			$table->foreign('city_id', 'world_cities_locale_ibfk_1')->references('id')->on('world_cities')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('world_cities_locale', function(Blueprint $table)
		{
			$table->dropForeign('world_cities_locale_ibfk_1');
		});
	}

}
