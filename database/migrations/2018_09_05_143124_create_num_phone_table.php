<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNumPhoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('num_phone', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('solde');
            $table->string('number');
            $table->integer("operator_id")->unsigned();
            $table->foreign('operator_id')->references('id')->on('operator');
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
        Schema::dropIfExists('num_phone');
    }
}
