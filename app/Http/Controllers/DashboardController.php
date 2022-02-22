<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_pegawai = Pegawai::all()->count();
        return view('authenticate.dashboardView')->with('jumlah_pegawai', $jumlah_pegawai);
    }
}
