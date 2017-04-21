<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorldCitiesLocaleTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('world_cities_locale', function (Blueprint $table) {
            $table->increments('id')->comment('Auto increase ID');
            $table->integer('city_id')->unsigned()->comment('City ID');
            $table->string('name', 255)->default('')->comment('Localized city name');
            $table->string('alias', 255)->nullable()->comment('Localized city alias');
            $table->string('full_name', 255)->nullable()->comment('Localized city fullname');
            $table->string('locale', 6)->nullable()->comment('locale name');
            $table->unique(['city_id','locale'], 'uniq_locale');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('world_cities_locale');
    }
}
