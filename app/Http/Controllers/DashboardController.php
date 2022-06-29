<?php

namespace App\Http\Controllers;

use App\Models\Instansi;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_pegawai = Pegawai::all()->count();
        $jumlah_instansi = Instansi::all()->count();
        return view('dashboard.index', ['jumlah_pegawai' => $jumlah_pegawai,
                                        'jumlah_instansi' => $jumlah_instansi]);
    }

    public function error404()
    {
        return view('errors.404');
    }
}
