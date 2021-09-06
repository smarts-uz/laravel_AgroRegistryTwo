<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersTableOneAuthColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // user_id => name
            // email => email
            $table->string('username', 255)->unique()->nullable();
            $table->string('fullname', 255)->nullable();
            $table->string('firstname', 70)->nullable();
            $table->string('lastname', 70)->nullable();
            $table->string('midname', 70)->nullable();
            $table->string('pinfl', 15)->nullable();
            $table->string('inn', 10)->nullable();
            $table->string('passport', 10)->nullable();
            $table->date('passport_expire_date', 10)->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('address', 400)->nullable();
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

        });
    }
}
