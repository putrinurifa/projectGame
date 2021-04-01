<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function contact()
    {
        return view('contact-us', ['status'=>'active']);
    }
}
