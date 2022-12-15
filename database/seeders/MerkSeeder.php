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
    }
}
