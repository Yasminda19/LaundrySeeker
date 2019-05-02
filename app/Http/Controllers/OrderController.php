<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Paket;
use App\Order;

class OrderController extends Controller
{
    // must login
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $paket = Paket::find($request['id']);

        if (Auth::user()->id !== $paket->launderer_id)
        {
            Order::create([
                'user_id' => Auth::user()->id,
                'paket_id' => $request['id'],
                'qty' => $request['qty'],
            ]);
        }

        return view('order');
    }
}
