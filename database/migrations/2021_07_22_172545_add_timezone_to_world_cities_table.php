<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimezoneToWorldCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('world_cities', function (Blueprint $table) {
            $table->string('iana_timezone', 255)
                ->after('code')
                ->nullable()
                ->comment('IANA Timezone Name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('world_cities', function (Blueprint $table) {
            $table->dropColumn('iana_timezone');
        });
    }
}
