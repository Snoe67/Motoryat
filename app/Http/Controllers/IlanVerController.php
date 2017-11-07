<?php

namespace App\Http\Controllers;

use App\GovdeTip;
use App\MotorMarka;
use App\YakitTip;
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

    public function ilkAdim()
    {
        $altKategoriler = \App\AnaKategori::findOrFail(1)->altkategori;
        return view('ilan-ver-adim-1')->with('altKategoriler', $altKategoriler);
    }

    public function ikinciAdimGet()
    {
        if (session('formSecenekDatalari') && session('seciliData')) {
            return view('ilan-ver-adim-2')
                ->with('formSecenekDatalari', session('formSecenekDatalari'))
                ->with('seciliData', session('seciliData'));
        } else {
            return redirect()->route('ilan-ver-adim-1');
        }
    }

    public function ikinciAdimVeriler(Request $request)
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


        $paraBirimleri = \App\ParaBirimi::get();
        $ilanDurumlari = \App\Durum::get();
        $ulke = \App\Ulke::findOrFail(1);
        $iller = $ulke->il;
        $formSecenekDatalari = array();
        $disk = \Storage::disk('gcs-goruntule');
        $url = $disk->url('orjinal-boyutlu/IMG-20160401-WA0000.jpg');

        if ($seciliData[0] == 1) {
            $motorMarkalari = \App\MotorMarka::get();
            $govdeTipleri = \App\GovdeTip::get();
            $yakitTipleri = \App\YakitTip::get();
            $bulunanUlkeler = \App\BulunanUlke::get();
            $formSecenekDatalari = [
                'paraBirimleri' => $paraBirimleri, 'ilanDurumlari' => $ilanDurumlari, 'motorMarkalari' => $motorMarkalari,
                'govdeTipleri' => $govdeTipleri, 'yakitTipleri' => $yakitTipleri, 'bulunanUlkeler' => $bulunanUlkeler,
                'iller' => $iller, 'resimurl' => $url
            ];
        } elseif ($seciliData[0] == 2) {
            $yelkenliTipleri = \App\YelkenliTip::get();
            $govdeTipleri = \App\GovdeTip::get();
            $bulunanUlkeler = \App\BulunanUlke::get();
            $formSecenekDatalari = [
                'paraBirimleri' => $paraBirimleri, 'ilanDurumlari' => $ilanDurumlari, 'yelkenliTipleri' => $yelkenliTipleri,
                'govdeTipleri' => $govdeTipleri, 'bulunanUlkeler' => $bulunanUlkeler, 'iller' => $iller
            ];
        } elseif ($seciliData[0] == 3) {
            $govdeTipleri = \App\GovdeTip::get();
            $motorMarkalari = \App\MotorMarka::get();
            $formSecenekDatalari = [
                'paraBirimleri' => $paraBirimleri, 'ilanDurumlari' => $ilanDurumlari, 'govdeTipleri' => $govdeTipleri,
                'motorMarkalari' => $motorMarkalari, 'iller' => $iller
            ];
        } elseif ($seciliData[0] == 4) {
            $govdeTipleri = \App\GovdeTip::get();
            $motorMarkalari = \App\MotorMarka::get();
            $tabanTipleri = \App\TabanTip::get();
            $formSecenekDatalari = [
                'paraBirimleri' => $paraBirimleri, 'ilanDurumlari' => $ilanDurumlari, 'govdeTipleri' => $govdeTipleri,
                'motorMarkalari' => $motorMarkalari, 'tabanTipleri' => $tabanTipleri, 'iller' => $iller
            ];
        } elseif ($seciliData[0] == 5) {
            $motorTipleri = \App\MotorTip::get();
            $formSecenekDatalari = [
                'paraBirimleri' => $paraBirimleri, 'ilanDurumlari' => $ilanDurumlari, 'motorTipleri' => $motorTipleri,
                'iller' => $iller
            ];
        } elseif ($seciliData[0] == 6) {
            $govdeTipleri = \App\GovdeTip::get();
            $formSecenekDatalari = [
                'paraBirimleri' => $paraBirimleri, 'ilanDurumlari' => $ilanDurumlari, 'govdeTipleri' => $govdeTipleri,
                'iller' => $iller
            ];
        } elseif ($seciliData[0] == 7) {
            $govdeTipleri = \App\GovdeTip::get();
            $formSecenekDatalari = [
                'paraBirimleri' => $paraBirimleri, 'ilanDurumlari' => $ilanDurumlari, 'govdeTipleri' => $govdeTipleri,
                'iller' => $iller
            ];
        } elseif ($seciliData[0] == 8) {
            $formSecenekDatalari = [
                'paraBirimleri' => $paraBirimleri, 'ilanDurumlari' => $ilanDurumlari, 'iller' => $iller
            ];
        } elseif ($seciliData[0] == 9) {
            $govdeTipleri = \App\GovdeTip::get();
            $formSecenekDatalari = [
                'paraBirimleri' => $paraBirimleri, 'ilanDurumlari' => $ilanDurumlari, 'govdeTipleri' => $govdeTipleri,
                'iller' => $iller
            ];
        } elseif ($seciliData[0] == 10) {
            $formSecenekDatalari = [
                'paraBirimleri' => $paraBirimleri, 'ilanDurumlari' => $ilanDurumlari, 'iller' => $iller
            ];
        } elseif ($seciliData[0] == 11) {
            $formSecenekDatalari = [
                'paraBirimleri' => $paraBirimleri, 'ilanDurumlari' => $ilanDurumlari, 'iller' => $iller
            ];
        } elseif ($seciliData[0] == 12) {
            $formSecenekDatalari = [
                'paraBirimleri' => $paraBirimleri, 'ilanDurumlari' => $ilanDurumlari, 'iller' => $iller
            ];
        }

        return redirect('ilan-ver/adim-2')
            ->with('formSecenekDatalari', $formSecenekDatalari)
            ->with('seciliData', $seciliData);
    }


}