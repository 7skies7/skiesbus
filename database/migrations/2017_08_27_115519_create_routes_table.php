<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('route_name')->nullable();
            $table->integer('route_from')->unsigned()->index();
            $table->foreign('route_from')->references('id')->on('cities');
            $table->integer('route_to')->unsigned()->index();
            $table->foreign('route_to')->references('id')->on('cities');
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
       
        
        Schema::dropIfExists('routes');
     
    }
}
