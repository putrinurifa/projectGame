<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'soal',
        'image',
        'jawaban',
        'kategori',
        'pilihan1',
        'pilihan2',
        'pilihan3',
        'no_soal',
        'skor',
    ];

    public static function getByIdMudah($id)
    {
        return Game::where([
            'kategori' => 'Mudah',
            'no_soal' => $id
        ])->first();
    }

    public static function getByIdSedang($id)
    {
        return Game::where([
            'kategori' => 'Sedang',
            'no_soal' => $id
        ])->first();
    }

    public static function getByIdSulit($id)
    {
        return Game::where([
            'kategori' => 'Sulit',
            'no_soal' => $id
        ])->first();
    }

    public static function getMudah()
    {
        return Game::where([
            'kategori' => 'Mudah'
        ])->get();
    }

    public static function getSedang()
    {
        return Game::where([
            'kategori' => 'Sedang'
        ])->get();
    }

    public static function getSulit()
    {
        return Game::where([
            'kategori' => 'Sulit'
        ])->get();
    }
}
