<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWorldContinentsLocaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('world_continents_locale', function(Blueprint $table)
		{
			$table->foreign('continent_id', 'world_continents_locale_ibfk_1')->references('id')->on('world_continents')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('world_continents_locale', function(Blueprint $table)
		{
			$table->dropForeign('world_continents_locale_ibfk_1');
		});
	}

}
