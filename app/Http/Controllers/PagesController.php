<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('pages.dashboard');
    }

    public function completed()
    {
        return view('pages.completed');
    }
}
