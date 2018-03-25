<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBtcWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('btc_wallets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('guid');
            $table->string('address');
            $table->string('password');
            $table->string('label');
            $table->string('btc');
            $table->string('usd');
            $table->integer('id_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('btc_wallets');
    }
}
