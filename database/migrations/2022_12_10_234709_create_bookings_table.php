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
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            // $table->foreignId('kendala_id')->constrained('kendalas')->onDelete('restrict');
            $table->dateTime('tanggal_booking');
            // $table->foreignId('merk_id')->constrained('merks')->onDelete('restrict');
            $table->foreignId('kota_id')->constrained('kotas')->onDelete('cascade');
            $table->foreignId('kecamatan_id')->constrained('kecamatans')->onDelete('cascade');
            $table->string('alamat_lengkap');
            $table->enum('sudah_dibaca',['sudah', 'belum'])->nullable()->default('belum');
            $table->string('catatan')->nullable()->default(null);
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
