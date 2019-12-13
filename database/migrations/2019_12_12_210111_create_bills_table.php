<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id_bills');
            $table->timestamp('date');
            $table->string('state');
            $table->string('detail');
            $table->integer('iva');
            $table->integer('subtotal');
            $table->integer('total');
            $table->integer('id_clients')->unsigned();

            $table->foreign('id_clients')->references('id_clients')->on('clients');


            $table->timestamps();



     //       $table->foreign('id_users')->references('id_users')->on('users');

        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
