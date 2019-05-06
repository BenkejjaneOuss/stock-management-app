<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRechargePurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recharge_purchase', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('montant');
            $table->integer("num_phone_id")->unsigned();
            $table->foreign('num_phone_id')->references('id')->on('num_phone');
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
        Schema::dropIfExists('recharge_purchase');
    }
}
