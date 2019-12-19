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
            $table->date('generated_bill');
            $table->date('delivered_bill')->nullable();
            $table->date('overdue_bill')->nullable();
            $table->string('state');
            $table->string('detail')->nullable();
            $table->integer('iva');
            $table->integer('subtotal');
            $table->integer('total');
            $table->integer('id_clients')->unsigned()->nullable();
            $table->integer('id_states')->unsigned()->nullable();

            $table->foreign('id_clients')->references('id_clients')->on('client');
            $table->foreign('id_states')->references('id_states')->on('states');


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
        Schema::dropIfExists('billsController');
    }
}
