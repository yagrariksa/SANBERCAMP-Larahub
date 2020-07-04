<?php

namespace App\Http\Controllers\Larahub;

use App\Http\Controllers\Controller as Control;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LarahubuserController extends Control
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        //
        return view('larahub.homepage');
    }

    public function login()
    {
        return view('larahub.login');
    }

    public function matching(Request $request)
    {
        // 
        if (!auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->back();
        }

        return Redirect('/larahub');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/larahub');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('larahub.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nama' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);
        $data = new User;
        $data->name = $request->nama;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('/larahub/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
