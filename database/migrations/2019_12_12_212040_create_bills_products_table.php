<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'bills_products',
            function (Blueprint $table) {
                $table->increments('id_products_bills');
                $table->integer('product_quantity');
                $table->integer('unit_price');
                $table->string('total_product_value');
                $table->integer('id_bills')->unsigned();
                $table->integer('id_products')->unsigned();
                $table->foreign('id_products')->references('id_products')->on('products');
                $table->foreign('id_bills')->references('id_bills')->on('bills');
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
        Schema::dropIfExists('bills_products');
    }
}
