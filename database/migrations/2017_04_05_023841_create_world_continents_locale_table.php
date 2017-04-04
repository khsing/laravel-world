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
			$table->increments('id')->comment('自增id');
			$table->integer('continent_id')->unsigned()->nullable()->index('continent_id');
			$table->string('name', 256)->nullable()->comment('中文名');
			$table->string('alias', 256)->nullable();
			$table->string('full_name', 256)->nullable();
			$table->string('locale', 6)->nullable()->comment('英文名');
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
