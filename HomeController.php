<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use Hash;
use Session;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('create');
    }
    public function login()
    {
        return view('login');
    }
    public function Admin()
    {
        return view('AdminZone');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(request $req)
    {
        if (Detail::where('email', '=', $req->email)->count() > 0)
         {
            return back()->with('fail', 'Email Is Already Exist');

        }
         else {
            $k = new Detail;
            $k->name = $req->name;
            $k->email = $req->email;
            $k->phone = $req->phone;
            $k->password=Hash::make($req->password);
            $k->save();
            return back()->with('success', 'User Register Successfully');
        }

    }

    /**
     * Store a newly created resource in storage.
     */

    public function UserLogin(Request $req)
    {
        $user = Detail::where('email', '=', $req->email)->first();

        if ($user) {
            if (Hash::check($req->password, $user->password)) {
                $req->session()->put('loginId', $user->id);
                return redirect('/AdminZone');
            } else {
                return back()->with('fail', 'Password Not  Match');
            }
        } else {
            return back()->with('fail', 'Email Not Registered');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}