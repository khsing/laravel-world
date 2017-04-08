<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWorldCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('world_countries', function(Blueprint $table)
		{
			$table->foreign('continent_id', 'world_countries_ibfk_1')->references('id')->on('world_continents')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('world_countries', function(Blueprint $table)
		{
			$table->dropForeign('world_countries_ibfk_1');
		});
	}

}
