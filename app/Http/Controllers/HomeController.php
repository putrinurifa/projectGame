<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user()->role;
        if($role == "admin"){
            alert()->success('Success','Berhasil login sebagai ' . $role);
            return redirect()->to('admin');
        } else if($role == "player"){
            alert()->success('Success','Berhasil login sebagai ' . $role);
            return view('home', ['status'=>'active']);
         }
         else {
            alert()->error('Error','Terjadi kesalahan saat login');
            return redirect()->to('logout');
        }
    }
}
