<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobi')->insert([
            [
                'nama_hobi'=> 'Mendengarkan Musik',
                'alasan'=> 'Suka dengan ketenangan,
                            suka mendengarkan lagu dengan headset',
            ],
            [
                'nama_hobi'=> 'Traveling/jalan jalan',
                'alasan'=> 'Suka dengan alam,suka keindahan dan menyukai hal hal baru',
            ],
            [
                'nama_hobi'=> 'Memasak',
                'alasan'=> 'Suka mencoba hal-hal baru,melakukan eksperimen,',
            ],
            [
                'nama_hobi'=> 'Rebahan',
                'alasan'=> 'Hal yang paling favorit jika sedang tidak melakukan apa-apa',
            ],
        ]);

    }
}
