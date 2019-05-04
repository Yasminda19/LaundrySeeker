<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    // Must be signed in.
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request)
    {
        return Paket::create();
    }
}
