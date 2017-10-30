<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KurumsalHesabimController extends Controller
{
    //
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','kurumsal']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kurumsal.kurumsalhesabim');
    }

    public function ilanlarim(){
        return view('kurumsal.kurumsalilanlarim');
    }

    public function favorilerim(){
        return view('kurumsal.kurumsalfavorilerim');
    }

    public function mesajlarim(){
        return view('kurumsal.kurumsalmesajlarim');
    }

    public function ayarlarim(){
        return view('kurumsal.kurumsalayarlarim');
    }

    public function magazaDuzenleme(){
        return view('kurumsal.magazaduzenleme');
    }
}
