<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RouteUsageTrackerTable extends Migration
{
    public function up()
    {
        Schema::create('route_usages', function (Blueprint $table) {
            $table->increments('id');

            $table->string('path');

            $table->string('method');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('route_usages');
    }
}
