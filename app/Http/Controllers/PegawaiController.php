<?php

namespace App\Http\Controllers;

use App\Models\Instansi;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Pegawai $pegawai)
    {
        //
        $pegawai = Pegawai::get();
        return view('pegawai.pegawaiView', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return \view('pegawai.pegawaiCreateView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Instansi $instansi)
    {
        //
        $validation = $request->validate([
            'nip_pegawai'        => 'required|min:18|unique:pegawais,nip_pegawai',
            'nama_pegawai'       => 'required',
            'instansi_pegawai'   => 'required',
            'alamat_ktp_pegawai' => 'required|max:13',
            'nope_pegawai'       => 'required|unique:pegawais,nope_pegawai',
            'foto_pegawai'       => 'required|image|file|max:1024'
        ]);

        if ($request->file('foto_pegawai')) {
            $validation['foto_pegawai'] = $request->file('foto_pegawai')->store('foto-pegawai');
        }

        Alert::success('Success Title', 'Success Add New Data Instansi');
        Pegawai::create($validation);
        return redirect()->route('pegawai.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        //
        return view('pegawai.pegawaiDetailView', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        //
        return view('pegawai.pegawaiEditView', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        //
        if ($pegawai->foto_pegawai) {
            Storage::delete($pegawai->foto_pegawai);
        }
        Alert::success('Success Deleted', 'Success Deleted Your Data Instansi');
        Pegawai::destroy($pegawai->id);
        return redirect()->back()->with('success', 'Data Berhasil DiHapus');
    }

    public function indexPegawai()
    {
        $pegawai = Pegawai::all();
        return view('pegawai.pegawaiView', compact('pegawai'));
    }

    public function showPegawai($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.pegawaiDetailView', compact('pegawai', $pegawai));
    }
}
