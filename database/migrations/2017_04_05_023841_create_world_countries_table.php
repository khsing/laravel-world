<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorldCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('world_countries', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('continent_id')->unsigned();
			$table->string('name', 256)->default('');
			$table->string('full_name', 256)->nullable();
			$table->string('code', 4)->nullable();
			$table->string('code3', 6)->nullable();
			$table->boolean('has_region')->nullable()->default(0);
			$table->unique(['continent_id','name'], 'uniq_country');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('world_countries');
	}

}
