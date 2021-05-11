<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    public function home()
    {
        return view('home', ['status'=>'active']);
    }

    public function about()
    {
        return view('about-us', ['status'=>'active']);
    }

    public function product()
    {
        return view('product', ['status'=>'active']);
    }

    public function detailProduct($id)
    {
        return view('detailProduct', ['status'=>'active', 'id'=>$id]);
    }

    public function contact()
    {
        return view('contact-us', ['status'=>'active']);
    }

    public function gameUtama()
    {
        return view('game.utama');
    }

    public function gameKategori()
    {
        return view('game.kategori');
    }

    public function levelMudah()
    {
        return view('game.listMudah');
    }

    public function levelSedang()
    {
        return view('game.listSedang');
    }

    public function levelSulit()
    {
        return view('game.listSulit');
    }

    public function gameMudah($id)
    {
        return view('game.mudah', ['mudah' => Game::getByIdMudah($id)]);
    }

    public function hasilMudah($username, $jawaban, $id)
    {
        $game = Game::getByIdMudah($id);
        $user = User::getByName($username);

        $hasil = $game->jawaban;
        if($hasil == $jawaban){
            $skorSoal = $game->skor;
            $skorUser = $user->skor;
            $skor = $skorSoal + $skorUser;
            $user->update(['skor'=>$skor]);

            alert()->success('Selamat','Jawaban kamu benar');
            return redirect('/levelMudah');
        }
        else {
            alert()->error('Oops...','Jawaban Kamu Salah');
            return redirect('/levelMudah');
        }
    }

    public function habis()
    {
        alert()->warning('WarningAlert','Waktu habis!');
        return redirect('/levelMudah');
    }
}
