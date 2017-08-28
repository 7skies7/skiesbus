<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('buses', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('bus_name')->nullable();
            $table->integer('bus_route')->unsigned()->index();
            $table->integer('bus_seats')->nullable();
            $table->dateTime('bus_datetime')->nullable();
            $table->integer('soft_delete')->default(0);
            $table->foreign('bus_route')->references('id')->on('routes');
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
        //
        Schema::dropIfExists('buses');
    }
}
