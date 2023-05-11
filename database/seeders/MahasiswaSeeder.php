<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('mhs_matkul')->insert([
            [
                'mahasiswa_id' => '4',
                'matkul_id' => '1',
                'nilai' => 'B+'
            ],
            [
                'mahasiswa_id' => '4',
                'matkul_id' => '5',
                'nilai' => 'B+'
            ],
            [
                'mahasiswa_id' => '4',
                'matkul_id' => '10',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '4',
                'matkul_id' => '13',
                'nilai' => 'B+'
            ],
            [
                'mahasiswa_id' => '4',
                'matkul_id' => '15',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '4',
                'matkul_id' => '16',
                'nilai' => 'B+'
            ],
            [
                'mahasiswa_id' => '6',
                'matkul_id' => '6',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '6',
                'matkul_id' => '7',
                'nilai' => 'B+'
            ],
            [
                'mahasiswa_id' => '6',
                'matkul_id' => '19',
                'nilai' => 'B+'
            ],
            [
                'mahasiswa_id' => '6',
                'matkul_id' => '22',
                'nilai' => 'C+'
            ],
            [
                'mahasiswa_id' => '7',
                'matkul_id' => '11',
                'nilai' => 'B'
            ],
            [
                'mahasiswa_id' => '7',
                'matkul_id' => '17',
                'nilai' => 'B'
            ],
            [
                'mahasiswa_id' => '7',
                'matkul_id' => '21',
                'nilai' => 'A'
            ],
           
        ]);
    }
}
