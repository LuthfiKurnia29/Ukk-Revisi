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
        Schema::create('detail_servis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained('bookings')->onDelete('cascade');
            $table->foreignId('teknisi_id')->constrained('teknisis')->onDelete('restrict');
            $table->date('estimasi_selesai');
            $table->string('keterangan_teknisi');
            $table->double('harga');
            $table->enum('status',['sedang_dikerjakan','menunggu_pembayaran','selesai'])->default('sedang_dikerjakan');
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
        Schema::dropIfExists('detail_servis');
    }
};
