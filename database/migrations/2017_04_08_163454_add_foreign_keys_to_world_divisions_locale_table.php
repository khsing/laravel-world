<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWorldDivisionsLocaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('world_divisions_locale', function(Blueprint $table)
		{
			$table->foreign('division_id', 'world_divisions_locale_ibfk_1')->references('id')->on('world_divisions')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('world_divisions_locale', function(Blueprint $table)
		{
			$table->dropForeign('world_divisions_locale_ibfk_1');
		});
	}

}
