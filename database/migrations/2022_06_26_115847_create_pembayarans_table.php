<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('dibayar');
            $table->integer('kembali');
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->bigInteger('pembeli_id')->unsigned()->index();
            $table->bigInteger('pesanan_id')->unsigned()->index();
            $table->bigInteger('pengiriman_id')->unsigned()->index();
            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pembeli_id')->references('id')->on('pembelis');
            $table->foreign('pesanan_id')->references('id')->on('pesanans');
            $table->foreign('pengiriman_id')->references('id')->on('pengirimans');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayarans');
    }
};
