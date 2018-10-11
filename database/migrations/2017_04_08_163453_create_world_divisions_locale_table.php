<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorldDivisionsLocaleTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('world_divisions_locale', function (Blueprint $table) {
            $table->increments('id')->comment('Auto Increase ID');
            $table->integer('division_id')->unsigned()->comment('Division ID');
            $table->string('name', 255)->default('')->comment('Localized Division Name');
            $table->string('abbr', 16)->nullable()->comment('Localized Division Abbr');
            $table->string('alias', 255)->nullable()->comment('Localized Division Alias');
            $table->string('full_name', 255)->nullable()->comment('Localized Division Fullname');
            $table->string('locale', 6)->nullable()->comment('locale');
            $table->unique(['division_id','locale'], 'uniq_division_id_locale');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('world_divisions_locale');
    }
}
