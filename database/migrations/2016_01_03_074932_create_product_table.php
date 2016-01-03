<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function($table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('category_id');
            $table->string('product_name');
            $table->decimal('product_price');
            $table->string('product_slug');
            $table->text('description');
            $table->integer('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product');
    }
}
