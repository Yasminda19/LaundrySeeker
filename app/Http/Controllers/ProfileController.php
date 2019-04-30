<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
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
     * Show the profile dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {
        $user = Auth::user();
        if ($user->type === "launderer")
            return view('profile')->with('launderer', Launderer::where('user_id', '=', $user->id)->first());
        return view('profile');
    }

    /**
     * Update the profile.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request)
    {
        // $user = User::where('id', '=', Auth::user()->id)->first();
        $user = Auth::user();

        
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->name = $request['nohp'];
        $user->save();
        
        if ($user->type === "launderer") {
            $launderer = Launderer::where('user_id', '=', $user->id)->first();
            $launderer->lokasi = $request['lokasi'];
            $launderer->save();
        }

        return view('profile')->with();
    }
}
