<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;



class HomeController2 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo 'oi!';

        $arr = ['a','b','c'];

        $users = User::get();

        //dd($users);
        return view('teste.teste', ['arr'=>$arr, 'users' => $users]);
    }

    public function doingSomething()
    {
        echo 'doing smth!';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
