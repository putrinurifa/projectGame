<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $soal = [
        'Bangunan yang sangat indah ini berdiri di Agra, India, yang terpilih
        sebagai salah satu dari Tujuh Keajaiban Dunia pada tanggal 7 Juli 2007 mewakili simbol hasrat
        dan cinta. Bangunan apakah yang dimaksud?', 
        'Pulau Sumatera sebelah selatan dan barat berbatasan dengan',
        'Salah satu pelabuhan yang terdapat di Provinsi Sumatera Barat adalah Pelabuhan',
        'Sebelah Timur Pulau Sumatera berbatasan dengan',
        'Di bawah ini yang merupakan pegunungan yang terletak di Pulau Jawa antara lain',
        'Di wilayah Indonesia terdapat banyak gunung api yang masih aktif. salah satu contoh gunung api aktif di Indonesia yaitu Gunung Merapi. Gunung tersebut terletak di wilayah provinsi'
    ];
        $jawaban = ['pilihan2', 'pilihan3', 'pilihan1', 'pilihan1', 'pilihan1', 'pilihan2'];

        $pilihan1 = [
        'Alhambra', 
        'Selat Sunda dan Samudera Pasifik',
        'Teluk Bayur',
        'Selat Malaka',
        'Pegunungan Sewu, Pegunungan Kendeng, dan Pegunungan Kapur Utara',
        'DKI Jakarta dan Banten'
        ];

        $pilihan2 = [
        'Taj Mahal',
        'Selat Sunda dan Samudera Indonesia',
        'Bakauheni',
        'Samudera Hindia',
        'Pegunungan Sewu, Pegunungan Kendeng, dan Pegunungan Bukit Barisan',
        'Jawa Tengah dan Daerah Istimewa Yogyakarta'
        ];

        $pilihan3 = [
        'Petra',
        'Selat Sunda dan Samudera Hindia',
        'Gilimanuk',
        'Selat Sunda',
        'Pegunungan Sewu, Pegunungan Bukit Barisan, dan Pegunungan Kapur Utara',
        'Jawa Timur dan Jawa Tengah'
        ];
        $kategori = ['Mudah', 'Mudah', 'Mudah', 'Mudah', 'Mudah', 'Mudah'];

        $skor = [10, 15, 8, 9, 12, 14];

        $no = [1,2, 3, 4, 5, 6];

        for ($i = 0; $i < 6; $i++) {
                DB::table('games')->insert([
                    'soal' => $soal[$i],
                    'jawaban' => $jawaban[$i],
                    'pilihan1' => $pilihan1[$i],
                    'pilihan2' => $pilihan2[$i],
                    'pilihan3' => $pilihan3[$i],
                    'kategori' => $kategori[$i],
                    'skor' => $skor[$i],
                    'no_soal' => $no[$i]
                ]);
            }
        }
}
