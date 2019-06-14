<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $dateFormat = "U";
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id_product');
            $table->integer('seller_id');
            $table->string('summary',512);
            $table->longText('description');
            $table->unsignedInteger('price');
            //hoi lai khuc gioi hạn dữ liệu ở đây 
            $table->tinyInteger('sale_rate',3);
            $table->tinyInteger('products_status');
            $table->timestamps();
        });
    }
    DB::statement("ALTER TABLE products AUTO_INCREMENT = 10000;");
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
