<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWorldRegionsLocaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('world_regions_locale', function(Blueprint $table)
		{
			$table->foreign('region_id', 'world_regions_locale_ibfk_1')->references('id')->on('world_regions')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('world_regions_locale', function(Blueprint $table)
		{
			$table->dropForeign('world_regions_locale_ibfk_1');
		});
	}

}
