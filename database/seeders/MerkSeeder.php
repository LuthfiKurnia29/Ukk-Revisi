<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Merk;

class MerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merks')->delete();
        Merk::create(['nm_merk' => 'Panasonic']);
        Merk::create(['nm_merk' => 'LG']);
        Merk::create(['nm_merk' => 'Daikin']);
        Merk::create(['nm_merk' => 'Sharp']);
        Merk::create(['nm_merk' => 'Changhong']);
        Merk::create(['nm_merk' => 'Haier']);
        Merk::create(['nm_merk' => 'Samsung']);
        Merk::create(['nm_merk' => 'Midea']);
        Merk::create(['nm_merk' => 'Gree']);
        Merk::create(['nm_merk' => 'Aux']);
        Merk::create(['nm_merk' => 'Polytron']);
        Merk::create(['nm_merk' => 'BestLife']);
        Merk::create(['nm_merk' => 'Akari']);
        Merk::create(['nm_merk' => 'Tori']);
        Merk::create(['nm_merk' => 'AquaJapan']);
        Merk::create(['nm_merk' => 'Electrolux']);
    }
}
