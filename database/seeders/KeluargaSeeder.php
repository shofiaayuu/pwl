<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga')->insert([
            [
                'no'=>'1',
                'nama'=> 'Muradji',
                'status'=> 'Ayah Kandung',
                'tempat_lahir'=> 'Tulungagung',
                'tgl_lahir'=> '1971-04-06',
                'jenis_kelamin'=> 'L',
                'pekerjaan'=> 'Wiraswasta',
                'agama'=> 'Islam',
                'alamat'=> 'LK.08 Ngunut Kec.Ngunut, Kab. Tulungagung',
            ],
            [
                'no'=>'2',
                'nama'=> 'Eni Rahayu',
                'status'=> 'Ibu Kandung',
                'tempat_lahir'=> 'Tulungagung',
                'tgl_lahir'=> '1979-12-28',
                'jenis_kelamin'=> 'P',
                'pekerjaan'=> 'Ibu Rumah Tangga',
                'agama'=> 'Islam',
                'alamat'=> 'LK.08 Ngunut Kec.Ngunut, Kab. Tulungagung',
            ],
            [
                'no'=>'3',
                'nama'=> 'Shofiatul Ayu A.',
                'status'=> 'Anak Kandung',
                'tempat_lahir'=> 'Tulungagung',
                'tgl_lahir'=> '2002-02-06',
                'jenis_kelamin'=> 'P',
                'pekerjaan'=> 'Belum Bekerja',
                'agama'=> 'Islam',
                'alamat'=> 'LK.08 Ngunut Kec.Ngunut, Kab. Tulungagung',
            ],
            [
                'no'=>'4',
                'nama'=> 'Kayla Faridatul Ramadhani',
                'status'=> 'Adik Kandung',
                'tempat_lahir'=> 'Tulungagung',
                'tgl_lahir'=> '2014-07-21',
                'jenis_kelamin'=> 'P',
                'pekerjaan'=> 'Belum Bekerja',
                'agama'=> 'Islam',
                'alamat'=> 'LK.08 Ngunut Kec.Ngunut, Kab. Tulungagung',
            ],
            [
                'no'=>'5',
                'nama'=> 'Muhammad Nur Aiviqi',
                'status'=> 'Paman',
                'tempat_lahir'=> 'Tulungagung',
                'tgl_lahir'=> '2001-11-30',
                'jenis_kelamin'=> 'L',
                'pekerjaan'=> 'Wirausaha',
                'agama'=> 'Islam',
                'alamat'=> 'Sumberjo Kulon Kec.Ngunut, Kab. Tulungagung',
            ],
            [
                'no'=>'6',
                'nama'=> 'Irma Rusdiana',
                'status'=> 'Bibi',
                'tempat_lahir'=> 'Tulungagung',
                'tgl_lahir'=> '1997-01-05',
                'jenis_kelamin'=> 'P',
                'pekerjaan'=> 'Perawat',
                'agama'=> 'Islam',
                'alamat'=> 'Tegalrejo Kec.Rejotangan, Kab. Tulungagung',
            ],
        ]);

    }
}
