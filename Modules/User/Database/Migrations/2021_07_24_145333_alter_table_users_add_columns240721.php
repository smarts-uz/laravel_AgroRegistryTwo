<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableUsersAddColumns240721 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            /**
             * 0-Танланг
             * 1-Марказий аппарат
             * 2-Вилоят бошқармаси
             * 3-Туман/шаҳар бўлими
             * 4-Ҳудудий бошқарма
             */
            $table->integer('department')->default(0);
            $table->unsignedBigInteger('region_id')->nullable();
            $table->unsignedBigInteger('district_id')->nullable();

            $table->foreign('region_id')
                ->references('regionid')->on('uz_regions')
                ->onDelete('restrict');

            $table->foreign('district_id')
                ->references('areaid')->on('uz_districts')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_region_id_foreign');
            $table->dropForeign('users_area_id_foreign');
            $table->dropColumn('region_id');
            $table->dropColumn('area_id');
            $table->dropColumn('department');
        });
    }
}
