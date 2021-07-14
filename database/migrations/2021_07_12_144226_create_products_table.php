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
            $table->string('productName', 50);
            $table->unsignedBigInteger('productCategory');
            $table->text('pictures');
            $table->string('avatar');
            $table->string('title');
            $table->text('productDesc');
            $table->timestamps();

            $table->foreign('productCategory')->references('id')->on('products_categories');

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
