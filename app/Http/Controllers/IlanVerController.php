<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

class IlanVerController extends Controller
{
    //
    //
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $altKategoriler = \App\AnaKategori::findOrFail(1)->altkategori;
        return view('ilan-ver-adim-1')->with('altKategoriler', $altKategoriler);
    }

    public function ikinciAdim(Request $request)
    {
        $secilenAltKategori = "hatalı";
        $secilenMarka = "yok";
        $secilenModel = "yok";
        if ($request->has('alt-kat-bilgisi')) {
            $secilenAltKategori = $request->input('alt-kat-bilgisi');
        }
        if ($request->has('marka-bilgisi')) {
            $secilenMarka = $request->input('marka-bilgisi');
        }
        if ($request->has('model-bilgisi')) {
            $secilenModel = $request->input('model-bilgisi');
        }
        $seciliData = [$secilenAltKategori, $secilenMarka, $secilenModel];

        if (Route::getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'ilan-ver-adim-1' || Route::getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'ilan-ver-adim-2') {
            $paraBirimleri = \App\ParaBirimi::get();
            $ilanDurumlari = \App\Durum::get();
            return view('ilan-ver-adim-2')
                ->with('paraBirimleri', $paraBirimleri)
                ->with('ilanDurumlari', $ilanDurumlari)
                ->with('seciliData', $seciliData);
        } else {
            return redirect('/ilan-ver/adim-1');
        }
    }
}