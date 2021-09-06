<?php

use Illuminate\Support\Facades\DB;
use Nwidart\Modules\Facades\Module;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionDistrictTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // #TODO: migrate by type of database
        if(!Schema::hasTable('uz_districts')) {
            DB::unprepared(file_get_contents(Module::getModulePath('region') . "imports/uz_regions_uz_districts.sql"));
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uz_regions');
        Schema::dropIfExists('uz_districts');
    }
}
