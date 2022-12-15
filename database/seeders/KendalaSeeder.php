<?php

namespace Database\Seeders;

use App\Models\Kendala;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kendalas')->delete();
        Kendala::create(['nm_kendala' => 'Isi Freon & Cuci AC', 'harga' => 75000]);
        Kendala::create(['nm_kendala' => 'Instalasi Rusak', 'harga' => 90000]);
        Kendala::create(['nm_kendala' => 'AC Bocor', 'harga' => 50000]);
        Kendala::create(['nm_kendala' => 'AC Tidak Dingin', 'harga' => 100000]);
        Kendala::create(['nm_kendala' => 'AC beraroma Tidak Sedap', 'harga' => 90000]);
    }
}
