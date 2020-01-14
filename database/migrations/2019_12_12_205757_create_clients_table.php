<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'clients',
            function (Blueprint $table) {
                $table->increments('id_clients');
                $table->string('name');
                $table->string('last_name');
                $table->string('email')->nullable();
                $table->string('address');
                $table->string('phone');
                $table->string('city');
                $table->string('identification_card');
                $table->integer('id_cities')->unsigned()->nullable();
                $table->foreign('id_cities')->references('id_cities')->on('cities');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
