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
        $game = Game::where([
            'kategori' => 'Mudah'
        ])->paginate(6);
        return view('game.listMudah', ['mudah'=>$game]);
    }

    public function levelSedang()
    {
        $game = Game::where([
            'kategori' => 'Sedang'
        ])->paginate(6);
        return view('game.listSedang', ['sedang'=>$game]);
    }

    public function levelSulit()
    {
        $game = Game::where([
            'kategori' => 'Sulit'
        ])->paginate(6);
        return view('game.listSulit', ['sulit'=>$game]);
    }

    public function gameMudah($id)
    {
        return view('game.mudah', ['mudah' => Game::getByIdMudah($id)]);
    }

    public function gameSedang($id)
    {
        return view('game.sedang', ['sedang' => Game::getByIdSedang($id)]);
    }

    public function gameSulit($id)
    {
        return view('game.sulit', ['sulit' => Game::getByIdSulit($id)]);
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

            alert()->success('Selamat','Jawaban kamu benar dan mendapat skor ' . $skorSoal);
            return redirect('/levelMudah');
        }
        else {
            alert()->error('Oops...','Jawaban Kamu Salah');
            return redirect('/levelMudah');
        }
    }

    public function hasilSedang(Request $request)
    {
        $nomor = $request->nomor;
        $username = $request->username;
        $game = Game::getByIdSedang($nomor);
        $user = User::getByName($username);

        $hasil = strtolower($game->jawaban);
        $jawaban = strtolower($request->jawaban);
        if($hasil == $jawaban){
            $skorSoal = $game->skor;
            $skorUser = $user->skor;
            $skor = $skorSoal + $skorUser;
            $user->update(['skor'=>$skor]);

            alert()->success('Selamat','Jawaban kamu benar dan mendapat skor ' . $skorSoal);
            return redirect('/levelSedang');
        }
        else {
            alert()->error('Oops...','Jawaban Kamu Salah');
            return redirect('/levelSedang');
        }
    }

    public function hasilSulit(Request $request)
    {
        $nomor = $request->nomor;
        $username = $request->username;
        $game = Game::getByIdSulit($nomor);
        $user = User::getByName($username);

        $hasil = strtolower($game->jawaban);
        $jawaban = strtolower($request->jawaban);
        if($hasil == $jawaban){
            $skorSoal = $game->skor;
            $skorUser = $user->skor;
            $skor = $skorSoal + $skorUser;
            $user->update(['skor'=>$skor]);

            alert()->success('Selamat','Jawaban kamu benar dan mendapat skor ' . $skorSoal);
            return redirect('/levelSulit');
        }
        else {
            alert()->error('Oops...','Jawaban Kamu Salah');
            return redirect('/levelSulit');
        }
    }

    public function timeoutMudah()
    {
        alert()->warning('Oops...','Waktu habis!');
        return redirect('/levelMudah');
    }

    public function timeoutSedang()
    {
        alert()->warning('Oops...','Waktu habis!');
        return redirect('/levelSedang');
    }

    public function timeoutSulit()
    {
        alert()->warning('Oops...','Waktu habis!');
        return redirect('/levelSulit');
    }

    public function leaderboard()
    {
        return view('game.leaderboard', ['leaderboard' => User::getAll()]);
    }
}
