<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Página principal do site
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Dashboard — área privada (protegida por auth)
     */
    public function dashboard()
    {
        return view('dashboard');
    }
}
