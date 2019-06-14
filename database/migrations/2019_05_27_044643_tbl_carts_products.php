<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblCartsProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */protected $dateFormat ="U";
    public function up()
    {
        Schema::create('carts-products', function (Blueprint $table) {
            $table->increments('carts_products_id');
            $table->increments('carts_id');
            $table->increments('products_id');
            $table->string('product_name');
            $table->integer('product_price');
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
        Schema::dropIfExists('carts-products');
    }
}
