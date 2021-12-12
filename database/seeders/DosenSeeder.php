<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosens')->insert([
            'nama' => 'Abdul Barir',
            'nidn' => '57201',
            'alamat' => 'Depok',
            'kontak' => '08211654732',
            
        ]);
        DB::table('dosens')->insert([
            'nama' => 'Asri Pertiwi',
            'nidn' => '57202',
            'alamat' => 'Jakarta Selatan',
            'kontak' => '08211654732',
            
        ]);
        DB::table('dosens')->insert([
            'nama' => 'Erza Sofian',
            'nidn' => '57203',
            'alamat' => 'Jakarta Selatan',
            'kontak' => '08211654786',
            
        ]);
        DB::table('dosens')->insert([
            'nama' => 'Ahlijati Nuraminah',
            'nidn' => '55021',
            'alamat' => 'Jakarta Timur',
            'kontak' => '08211655432',
            
        ]);
        DB::table('dosens')->insert([
            'nama' => 'Desy Komalasari',
            'nidn' => '55022',
            'alamat' => 'Jakarta Barat',
            'kontak' => '08211656567',
            
        ]);
    }
}
