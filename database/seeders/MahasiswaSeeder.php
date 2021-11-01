<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'nama' => 'Sara Febriana',
            'nim' => '1810120019',
            'tanggal_lahir' => '1994-02-11',
            'alamat' => 'Depok',
            'tahun_masuk' => '2014',
            
        ]);
        DB::table('mahasiswas')->insert([
            'nama' => 'Fatiyyah Karimah',
            'nim' => '1810120010',
            'tanggal_lahir' => '2000-01-12',
            'alamat' => 'Bogor',
            'tahun_masuk' => '2018',
            
        ]);
        DB::table('mahasiswas')->insert([
            'nama' => 'Farid Ardiansyah',
            'nim' => '1810120012',
            'tanggal_lahir' => '2000-03-24',
            'alamat' => 'Kalisari',
            'tahun_masuk' => '2018',
            
        ]);
        DB::table('mahasiswas')->insert([
            'nama' => 'Aisyah Khairunnisa',
            'nim' => '1810120003',
            'tanggal_lahir' => '2000-04-25',
            'alamat' => 'Ciledug',
            'tahun_masuk' => '2018',
            
        ]);
        DB::table('mahasiswas')->insert([
            'nama' => 'Akbar Wisnu',
            'nim' => '1810120002',
            'tanggal_lahir' => '2000-07-25',
            'alamat' => 'Mampang',
            'tahun_masuk' => '2018',
            
        ]);
    }
}
