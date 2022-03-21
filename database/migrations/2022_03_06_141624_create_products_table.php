<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('quantity')->nullable()->default(0);
            $table->integer('origin_price')->nullable()->default(0);
            $table->integer('sale_price')->nullable()->default(0);
            $table->integer('discount_percent')->nullable()->default(0);
            $table->text('description')->nullable();
            $table->integer('user_id');
            $table->integer('category_id');
            $table->integer('status')->nullable()->default(0);
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
        Schema::dropIfExists('products');
    }
}
