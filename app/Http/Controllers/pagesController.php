<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function artisan()
    {
        return view('pages.artisan');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
