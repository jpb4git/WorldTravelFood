<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordersproducts', function (Blueprint $table) {

            $table->decimal('price',5,2);
            $table->integer('quantity');


            $table->unsignedInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');


            $table->unsignedInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders');


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
        Schema::dropIfExists('ordersproducts');
    }
}
