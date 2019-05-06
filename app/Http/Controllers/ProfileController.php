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
        $user->nohp = $request['nohp'];

        if ($user->type === "launderer")
        {
            $user->launderer->lokasi = mb_strtoupper($request['lokasi'], 'UTF-8');
            $user->launderer->desc = $request['desc'];
            $user->launderer->save();
        }

        $user->save();
        
        return redirect()->route('profile');
    }

    public function image(Request $request)
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);

        $user = Auth::user();

        $user->image_path = $imageName;
        $user->save();

        return redirect()->route('profile');        
    }
}
