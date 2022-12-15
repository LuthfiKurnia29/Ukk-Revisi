<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Kecamatan;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kecamatans')->delete();
        Kecamatan::create(['nm_kecamatan' => 'Dukuh Pakis', 'kota_id' => "1", 'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Gayungan', 'kota_id' => "1", 'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Jambangan', 'kota_id' => "1", 'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Karang Pilang', 'kota_id' => "1", 'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Sawahan', 'kota_id' => "1", 'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Wiyung', 'kota_id' => "1", 'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Wonocolo', 'kota_id' => "1", 'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Wonokromo', 'kota_id' => "1", 'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Gubeng', 'kota_id' => "1", 'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Gunung Anyar', 'kota_id' => "1",  'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Mulyorejo', 'kota_id' => "1",  'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Rungkut', 'kota_id' => "1",  'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Sukolilo', 'kota_id' => "1",  'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Tambaksari', 'kota_id' => "1",  'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Tenggilis Mejoyo', 'kota_id' => "1",  'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Bubutan', 'kota_id' => "1", 'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Genteng', 'kota_id' => "1",  'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Simokerto', 'kota_id' => "1",  'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Tegalsari', 'kota_id' => "1",  'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Bulak', 'kota_id' => "1", 'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Kenjeran', 'kota_id' => "1", 'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Krembangan', 'kota_id' => "1", 'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Pabean Cantian', 'kota_id' => "1", 'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Semampir', 'kota_id' => "1", 'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Asemrowo', 'kota_id' => "1", 'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Benowo', 'kota_id' => "1", 'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Lakarsantri', 'kota_id' => "1", 'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Pakal', 'kota_id' => "1", 'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Sambikerep', 'kota_id' => "1", 'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Sukomanunggal', 'kota_id' => "1", 'hrg_ongkir' => "15000"]);
        Kecamatan::create(['nm_kecamatan' => 'Tandes', 'kota_id' => "1", 'hrg_ongkir' => "15000"]);
    }
}
