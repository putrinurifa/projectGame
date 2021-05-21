<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $player = User::getAll();
        $mudah = Game::getMudah();
        $sedang = Game::getSedang();
        $sulit = Game::getSulit();
        return view('admin.home', ['user'=>$user, 'player'=>$player, 'mudah'=>$mudah, 'sedang'=>$sedang, 'sulit'=>$sulit]);
    }

    public function leaderboard()
    {
        $user = Auth::user();
        $leaderboard = User::leaderboard();
        return view('admin.leaderboard', ['user'=>$user, 'leaderboard'=>$leaderboard]);
    }
}
