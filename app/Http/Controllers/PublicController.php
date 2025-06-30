<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {
        $title = 'Home';
        return view('welcome', compact('title'));
    }

    public function homes()
    {
        $title = 'B&b';
        return view('B&b', compact('title'));
    }
}
