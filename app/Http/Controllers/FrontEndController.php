<?php

namespace App\Http\Controllers;

use App\Models\Instansi;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{

    public function indexFrontEnd(Instansi $instansi)
    {
        $instansi = Instansi::get();
        return view('layoutsFE.masterFEView', ['instansi' => $instansi]);
    }

    public function showInstansi($id)
    {
        $instansi = Instansi::findOrFail($id);
        return view('layoutsFE.detailFEView', compact('instansi', $instansi));
    }
}
