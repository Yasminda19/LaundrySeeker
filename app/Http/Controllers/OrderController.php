<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Paket;
use App\Order;
use App\User;
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
        $paket = Paket::find($request['paket_id']);

        if (Auth::user()->id !== $paket->launderer_id)
        {
            Order::create([
                'user_id' => Auth::user()->id,
                'launderer_id' => $paket->launderer_id,
                'paket_id' => $request['id'],
                'qty' => $request['qty'],
                'harga' => (int)$request['qty'] * $paket->harga,
                'status_code' => 0,
            ]);
        }

        return redirect()->route('order');
    }

    /**
     * update status orderan, yang bisa cuma launderer yang mulai buka orderannya
     */
    public function update(Request $request)
    {
        $order = Order::find($request->id);

        if (Auth::user()->id === $order->launderer_id)
        {
            $order->status_code = $request['status'];
            $order->save();
        }

        return redirect()->route('kelolaorder');
    }

    public function delete_order($id)
    {
        $order = Order::find($id);
        $user = Auth::user();

        if ($order->user->id === $user->id)
            $order -> delete();

        return redirect()->route('order');
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

    public function update_form($id)
    {
        $order = Order::find($id);
        return view('kelolaorder')->with('order', $order);
    }
}
