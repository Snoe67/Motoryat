<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getIlceler(Request $request)
    {

        if (!$request->has('cityIdForIlce')) {
            abort(404);
        }

        $ilID = $request->input('cityIdForIlce');

        $ilceler = \App\IL::findOrFail($ilID)->ilce;

        return $ilceler;
    }

    public function getMarkalar(Request $request)
    {
        if (!$request->has('altKatID')) {
            abort(404);
        }

        $altKatID = $request->input('altKatID');

        $markalar = \App\AltKategori::findOrFail($altKatID)->marka;

        return $markalar;
    }

    public function getModeller(Request $request)
    {
        if (!$request->has('markaID')) {
            abort(404);
        }

        $markaID = $request->input('markaID');

        $modeller = \App\Marka::findOrFail($markaID)->model;

        return $modeller;
    }
}
