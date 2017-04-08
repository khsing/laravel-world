<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWorldDivisionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('world_divisions', function(Blueprint $table)
		{
			$table->foreign('country_id', 'world_divisions_ibfk_1')->references('id')->on('world_countries')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('world_divisions', function(Blueprint $table)
		{
			$table->dropForeign('world_divisions_ibfk_1');
		});
	}

}
