<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SedangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $soal = [
        'Perbedaan membuat kita saling...',
        'Kita dapat melihat benda di sekitar kita menggunakan...',
        'Kita dapat mencium bau wangi menggunakan...',
        'Tubuh manusia butuh makanan dan minuman agar tetap...',
        'Jagung, tempe dan tahu adalah termasuk...',
        'Saat masuk dan keluar kelas hendaknya...'
    ];
        $jawaban = ['menghargai', 'mata', 'hidung', 'sehat dan kuat', 'makanan', 'mengucap salam'];

        $kategori = ['Sedang', 'Sedang', 'Sedang', 'Sedang', 'Sedang', 'Sedang'];

        $skor = [28, 20, 20, 25, 22, 30];

        $no = [1, 2, 3, 4, 5, 6];

        for ($i = 0; $i < 6; $i++) {
                DB::table('games')->insert([
                    'soal' => $soal[$i],
                    'jawaban' => $jawaban[$i],
                    'kategori' => $kategori[$i],
                    'skor' => $skor[$i],
                    'no_soal' => $no[$i]
                ]);
            }
        }
}
