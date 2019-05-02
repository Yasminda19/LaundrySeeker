<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Paket;

class PaketController extends Controller
{
    // Must be signed in.
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function list(Request $request)
    {
        $pakets = Auth::user()->launderer->pakets;
        return view('paket')->with('pakets', $pakets);
    }

    public function show($id)
    {
        $paket = Paket::where('paket_id', '=', $id)->get();
        return view('paket')->with('pakets', $paket);
    }

    public function update($id)
    {
        $paket = Paket::where('paket_id', '=', $id)->first();
        if ($paket->launderer_id !== Auth::user()->id);
        return redirect()->route('paket');
    }

    public function create(Request $request)
    {
        if (Auth::user()->type === 'launderer') {
            Paket::create([
                'launderer_id' => Auth::user()->id,
                'name' => $request['name'],
                'desc' => $request['desc'],
                'harga' => $request['harga']
            ]);
        }
        return redirect()->route('paket');
    }
    
    public function delete($id)
    {
        $paket = Paket::find($id);
        if (Auth::user()->id === $paket->launderer_id)
            $paket->delete();
        return redirect()->route('kelolapaket');
    }
}
