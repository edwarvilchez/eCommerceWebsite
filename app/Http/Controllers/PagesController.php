<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Home Page
    public function home()
    {
        return view('pages/home');
    }

    // Cart Page
    public function cart()
    {
        return view('pages/cart');
    }

    // Index Page
    public function index()
    {
        echo "Index Page";
    }
}
