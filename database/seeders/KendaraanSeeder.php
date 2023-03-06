<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kendaraan')->insert([
            [
                'no_pol'=> ' DE1221LYN',
                'merk'=> 'Honda',
                'jenis'=> 'Scoopy',
                'tahun_buat'=> '2021',
                'warna'=> 'Biru putih',
            ],
            [
                'no_pol'=> 'AU1402PTS',
                'merk'=> 'Suzuki',
                'jenis'=> 'Suzuki Ertiga',
                'tahun_buat'=> '2015',
                'warna'=> 'Putih',
            ],
            [
                'no_pol'=> 'AG2842RMH',
                'merk'=> 'Toyota',
                'jenis'=> 'Innova',
                'tahun_buat'=> '2018',
                'warna'=> 'Hitam',
            ]   
        ]);
    }
}
