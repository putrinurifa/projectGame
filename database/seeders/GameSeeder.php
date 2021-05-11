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
        $soal = ['Bangunan yang sangat indah ini berdiri di Agra, India, yang terpilih
        sebagai salah satu dari Tujuh Keajaiban Dunia pada tanggal 7 Juli 2007 mewakili simbol hasrat
        dan cinta. Bangunan apakah yang dimaksud?', 'Berusaha memperoleh kepandaian atau ilmu, merupakan arti dari kata...',
        'Apa nama rumah adat di atas? (Langsung sebutkan nama rumah)'];
        $image = 'soal-sulit-1.jpg';
        $jawaban = ['pilihan2', 'belajar', 'gadang'];
        $pilihan1 = 'Alhambra';
        $pilihan2 = "Taj Mahal";
        $pilihan3 = "Petra";
        $kategori = ['Mudah', 'Sedang', 'Sulit'];
        $skor = [10,25,50];

        for ($i = 0; $i < 3; $i++) {
            if($i==0){
                DB::table('games')->insert([
                    'soal' => $soal[$i],
                    'image' => $image,
                    'jawaban' => $jawaban[$i],
                    'pilihan1' => $pilihan1,
                    'pilihan2' => $pilihan2,
                    'pilihan3' => $pilihan3,
                    'kategori' => $kategori[$i],
                    'skor' => $skor[$i]
                ]);
            }
            else {
                DB::table('games')->insert([
                    'soal' => $soal[$i],
                    'jawaban' => $jawaban[$i],
                    'kategori' => $kategori[$i],
                    'skor' => $skor[$i]
                ]);
            }
        }
    }
}
