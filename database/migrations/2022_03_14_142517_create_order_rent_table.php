<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderRentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_rent', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->string('name_product');
            $table->integer('price');
            $table->integer('quantity');
            $table->date('start_day');
            $table->date('expiration_date');
            $table->integer('status');
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
        Schema::dropIfExists('order_rent');
    }
}
