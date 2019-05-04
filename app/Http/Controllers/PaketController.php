<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Launderer;

class PaketController extends Controller
{
    // Must be signed in.
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id)
    {
        $launderer = Launderer::find($id)->first();
        return view('paket')->with('pakets', $launderer->pakets);
    }

    public function fallback()
    {
        return view('paket')->with('pakets', []);
    }
}
