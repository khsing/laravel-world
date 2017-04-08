<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWorldCitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('world_cities', function(Blueprint $table)
		{
			$table->foreign('country_id', 'world_cities_ibfk_1')->references('id')->on('world_countries')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('division_id', 'world_cities_ibfk_2')->references('id')->on('world_divisions')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('world_cities', function(Blueprint $table)
		{
			$table->dropForeign('world_cities_ibfk_1');
			$table->dropForeign('world_cities_ibfk_2');
		});
	}

}
