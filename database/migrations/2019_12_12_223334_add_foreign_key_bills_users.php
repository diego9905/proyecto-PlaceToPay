<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyBillsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'bills',
            function (Blueprint $table) {
                $table->integer('id_users')->unsigned()->nullable();


                $table->foreign('id_users')->references('id')->on('users');
                //
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
        Schema::table(
            'billsController',
            function (Blueprint $table) {
                $table->dropForeign(['id']);
                $table->dropColumn(id);
            }
        );
        //
    }
}
