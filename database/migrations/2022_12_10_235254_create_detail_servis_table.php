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
            $table->foreignId('sparepart_id')->nullable()->default(null)->constrained('beli_spare_parts')->onDelete('restrict');
            $table->foreignId('teknisi_id')->constrained('teknisis')->onDelete('restrict');
            $table->string('keterangan_teknisi');
            $table->double('harga')->nullable();
            $table->enum('status',['Sedang Dikerjakan','Menunggu Pembayaran','Selesai'])->nullable()->default('Sedang Dikerjakan');
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
