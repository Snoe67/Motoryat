<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getIlceler(Request $request){

        if(!$request->has('cityIdForIlce')){
            abort(404);
        }

        $ilID = $request->input('cityIdForIlce');

        $ilceler = \App\IL::findOrFail($ilID)->ilce;

        return $ilceler;
    }
}
