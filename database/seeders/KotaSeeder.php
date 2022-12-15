<?php

namespace Database\Seeders;

use App\Models\Kota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kotas')->delete();
        Kota::create(['nm_kota' => 'Surabaya']);
    }
}
