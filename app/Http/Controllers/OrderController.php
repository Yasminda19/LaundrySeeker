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

    public function create(Request $request, $id)
    {
        $paket = Paket::find($id);

        if (Auth::user()->id !== $paket->launderer_id)
        {
            Order::create([
                'user_id' => Auth::user()->id,
                'paket_id' => $id,
                'qty' => $request['qty'],
                'harga' => (int)$request['qty'] * $paket->harga,
            ]);
        }

        return view('order');
    }

    public function delete_order($id)
    {
        $order = Order::find($id);
        $order -> delete();
    }
    
    public function create_form($id)
    {
        $paket = Paket::find($id);
        return view('orderform')->with('paket', $paket);
    }

    public function list()
    {
        $user = Auth::user();
        // dd($user->orders);
        return view('order')->with('orders', $user->orders);
    }
}
