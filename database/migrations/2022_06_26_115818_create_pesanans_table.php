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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tanggal_pesan');
            $table->integer('total_pesan');
            $table->integer('jumlah_pesan');
            $table->timestamps();
            $table->bigInteger('pupuk_id')->unsigned()->index();

            $table->foreign('pupuk_id')->references('id')->on('pupuks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
};
