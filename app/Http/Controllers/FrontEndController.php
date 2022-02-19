<?php

namespace App\Http\Controllers;

use App\Models\Instansi;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{

    public function indexFrontEnd(Instansi $instansi, Request $request)
    {
        $instansi = Instansi::get();
        return view('layoutsFE.masterFEView', ['instansi' => $instansi]);
    }

    public function instansiFrontEnd(Instansi $instansi, Request $request)
    {
        Instansi::all();
        return view('layoutsFE.detailFEView', ['instansi' => $instansi]);
    }
}
