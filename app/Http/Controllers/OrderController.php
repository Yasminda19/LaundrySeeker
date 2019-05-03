<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Paket;
use App\Order;
use App\Launderer;

class OrderController extends Controller
{
    // must login
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request)
    {
        $paket = Paket::find($request['id']);

        if (Auth::user()->id !== $paket->launderer_id)
        {
            Order::create([
                'user_id' => Auth::user()->id,
                'launderer_id' => $paket->launderer_id,
                'paket_id' => $request['id'],
                'qty' => $request['qty'],
                'harga' => (int)$request['qty'] * $paket->harga,
            ]);
        }

        return view('order');
    }

    public function create_form($id)
    {
        $paket = Paket::find($id);
        return view('orderform')->with('paket', $paket);
    }

    public function list_launderer()
    {
        $launderer = Launderer::find(Auth::user()->id);
        return view('kelolaorder')->with('orders', $launderer->orders);
    }

    public function list()
    {
        $user = Auth::user();
        // dd($user->orders);
        return view('order')->with('orders', $user->orders);
    }
}
