<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Launderer;

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
        $launderers = Launderer::all();
        return view('home')->with('launderers', $launderers);
    }

    public function search($lokasi)
    {
        $launderers = Launderer::like('lokasi', mb_strtoupper($lokasi, 'UTF-8'))->get();
        return view('home')->with('launderers', $launderers);
    }
}
