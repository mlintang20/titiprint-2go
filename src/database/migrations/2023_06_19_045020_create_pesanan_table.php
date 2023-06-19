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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->uuid('pesanan_id')->primary();
            $table->integer('jumlah_file');
            $table->integer('total_harga');
            $table->string('status_pesanan', 10);
            $table->tinyInteger('is_dikirim')->nullable();
            $table->date('tanggal_pesan')->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->uuid('user_id')->nullable();

            $table->foreign('user_id')->references('user_id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
};
