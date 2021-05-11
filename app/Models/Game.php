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
}
