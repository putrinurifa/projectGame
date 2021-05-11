<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public static function getByIdMudah($id)
    {
        return Game::where([
            'id' => $id,
            'kategori' => 'Mudah'
        ])->first();
    }
}
