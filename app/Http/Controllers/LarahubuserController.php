<?php

namespace App\Http\Controllers;

use App\larahubuser;
use Illuminate\Http\Request;

class LarahubuserController extends Controller
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('larahub.signup');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\larahubuser  $larahubuser
     * @return \Illuminate\Http\Response
     */
    public function show(larahubuser $larahubuser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\larahubuser  $larahubuser
     * @return \Illuminate\Http\Response
     */
    public function edit(larahubuser $larahubuser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\larahubuser  $larahubuser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, larahubuser $larahubuser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\larahubuser  $larahubuser
     * @return \Illuminate\Http\Response
     */
    public function destroy(larahubuser $larahubuser)
    {
        //
    }
}
