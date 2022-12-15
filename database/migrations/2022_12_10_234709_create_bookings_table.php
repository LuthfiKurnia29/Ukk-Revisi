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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('restrict');
            // $table->foreignId('kendala_id')->constrained('kendalas')->onDelete('restrict');
            $table->date('tanggal_booking');
            $table->double('jumlah_barang');
            // $table->foreignId('merk_id')->constrained('merks')->onDelete('restrict');
            $table->foreignId('kota_id')->constrained('kotas')->onDelete('restrict');
            $table->foreignId('kecamatan_id')->constrained('kecamatans')->onDelete('restrict');
            $table->string('alamat_lengkap');
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
        Schema::dropIfExists('bookings');
    }
};
