<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('sku');
            $table->text('description');
            $table->float('price');
            $table->boolean('active');
            $table->boolean('subscribe');
            $table->timestamps();
        });

        Schema::create('attributes', function (Blueprint $table){
           $table->increments('id');
           $table->string('attribute_name');
           $table->timestamps();
        });

        Schema::create('attribute_values', function (Blueprint $table){
           $table->increments('id');
           $table->integer('attribute_id')->unsigned();
           $table->string('value');
           $table->timestamps();
        });
        Schema::table('attribute_values', function($table) {
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
        });

        Schema::create('product_attribute', function (Blueprint $table){
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->integer('attribute_id')->unsigned();
            $table->integer('value_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('product_attribute', function($table) {
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('value_id')->references('id')->on('attribute_values')->onDelete('cascade');
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_attribute');
        Schema::dropIfExists('attribute_values');
        Schema::dropIfExists('attributes');
        Schema::dropIfExists('products');



    }
}
