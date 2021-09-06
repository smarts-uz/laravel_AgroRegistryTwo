<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('auth_logs')) {
            Schema::create('auth_logs', function (Blueprint $table) {
                $table->id();
                $table->string('ip', 20)->nullable();
                $table->bigInteger('user_id')->nullable();
                $table->timestamps();

                $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auth_logs');
    }
}
