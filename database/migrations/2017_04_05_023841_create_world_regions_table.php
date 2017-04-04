<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorldRegionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('world_regions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('country_id')->unsigned();
			$table->string('name', 256)->default('');
			$table->string('full_name', 256)->nullable();
			$table->string('code', 64)->nullable();
			$table->boolean('has_city')->default(0);
			$table->unique(['country_id','name'], 'uniq_region');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('world_regions');
	}

}
