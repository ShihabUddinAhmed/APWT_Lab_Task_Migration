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
            $table->string('p_name', 20);
            $table->integer('p_code');
            $table->string('p_desc', 100);
            $table->string('p_category', 20);
            $table->integer('p_price');
            $table->integer('p_quantity');
            $table->date('p_stockdate');
            $table->integer('p_rating');
            $table->integer('p_purchased');
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
