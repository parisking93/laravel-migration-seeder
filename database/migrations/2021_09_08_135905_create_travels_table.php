<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('deperture_city',50);
            $table->string('arrival_city',50);
            $table->dateTime('deperture_time');
            $table->dateTime('arrival_time');
            $table->string('name_owner', 30);
            $table->string('surname_owner', 30);
            $table->float('price', 7, 2);
            $table->string('hotel_name', 50);
            $table->text('description')->nullable();
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
        Schema::dropIfExists('travels');
    }
}
