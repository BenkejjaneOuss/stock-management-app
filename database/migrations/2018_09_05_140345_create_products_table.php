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
            $table->integer('qte_alert');
            $table->double('purchasing_price', 20, 2)->default(0.00);
            $table->double('total_price', 20, 2)->default(0.00);
            $table->integer("category_id")->unsigned();
            $table->foreign('category_id')->references('id')->on('category');
            $table->integer('archive')->default(0);
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
