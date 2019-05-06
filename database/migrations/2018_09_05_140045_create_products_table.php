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
            $table->string('ref');
            $table->string('designation');
            $table->integer('qte');
            $table->integer('purchasing_price');
            $table->integer('selling_price');
            $table->integer("category_id")->unsigned();
            $table->foreign('category_id')->references('id')->on('category');
            $table->integer("supplier_id")->unsigned();
            $table->foreign('supplier_id')->references('id')->on('suppliers');
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
