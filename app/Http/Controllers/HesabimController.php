<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HesabimController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','bireysel']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bireysel.hesabim');
    }

    public function ilanlarim(){
        return view('bireysel.ilanlarim');
    }

    public function favorilerim(){
        return view('bireysel.favorilerim');
    }

    public function mesajlarim(){
        return view('bireysel.mesajlarim');
    }

    public function ayarlarim(){
        return view('bireysel.ayarlarim');
    }
}
