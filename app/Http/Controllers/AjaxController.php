<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getIlceler(Request $request){
        $ilID = $request->input('cityIdForIlce');

        $ilceler = \App\IL::findOrFail($ilID)->ilce;

        return $ilceler;
    }
}
