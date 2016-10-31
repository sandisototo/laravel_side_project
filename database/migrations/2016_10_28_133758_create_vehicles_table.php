<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Creating the owner table that will store information about all vehicle owners
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('owner_firstname');
            $table->string('owner_lastname');
            $table->string('owner_email')->unique();
            $table->string('owner_contact_number');
            $table->string('manufacturer');
            $table->string('type');
            $table->string('year');
            $table->string('colour');
            $table->string('mileage');
            $table->softDeletes();
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
        //Undo changes on the db
        Schema::drop('vehicles');
    }
}
