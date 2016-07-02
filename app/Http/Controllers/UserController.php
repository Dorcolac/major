<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {

        return view('myprofile')->with(['user' => Auth::user()]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->nickname = $request->nickname;
        $user->bio = $request->bio;
        $user->phone1 = $request->phone1;
        $user->phone2 = $request->phone2;
        $user->location = $request->location;


        $user->save();

        return redirect()->back();
    }

    public function listallusers()
    {
        $users = User::all();

        return view('listofusers')->with(['users' => $users]);
    }

    public function singleuser($id)
    {
        $user = User::find($id);

        return view('userview')->with(['user' => $user]);
    }
}
