<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SulitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $soal = [
        'Apa nama rumah adat di atas? (Langsung sebutkan nama rumah)',
        'Kalimat yang sesuai untuk penulisan hubungan angka 5 dan 7 pada gambar berikut adalah',
        'Paman ingin menarik logam dan memisahkan dari barang rongsokan lainnya menggunakan alat seperti pada di gambar. Gaya yang digunakan pada alat tersebut adalah',
        'Susunan kata yang tepat adalah',
        'Perhatikan gambar!
        Perubahan yang dialami es krim tersebut adalah',
        'Benda dibawah ini yang berbentuk balok ialah'
    ];

        $image = ['soal-sulit-1.jpg', 'soal-sulit-2.jpg', 'soal-sulit-3.jpg', 'soal-sulit-4.jpg', 'soal-sulit-5.jpg', 'soal-sulit-6.jpg'];
        
        $jawaban = ['gadang', '7 lebih dari 5', 'magnet', 'istirahat', 'mencair', 'kulkas'];

        $kategori = ['Sulit', 'Sulit', 'Sulit', 'Sulit', 'Sulit', 'Sulit'];

        $skor = [35, 32, 39, 35, 40, 38];

        $no = [1, 2, 3, 4, 5, 6];

        for ($i = 0; $i < 6; $i++) {
                DB::table('games')->insert([
                    'soal' => $soal[$i],
                    'image' => $image[$i],
                    'jawaban' => $jawaban[$i],
                    'kategori' => $kategori[$i],
                    'skor' => $skor[$i],
                    'no_soal' => $no[$i]
                ]);
            }
        }
}
