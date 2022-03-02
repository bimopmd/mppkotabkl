<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('authenticate.registerView');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nip' => 'required',
            'name' => 'required',
            'instansi' => 'required',
            'email' => 'required',
            'password' => 'required|min:5|max:255',
        ]);

        // $validateData['password'] = bcrypt($validateData['password']);
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        Alert::toast('harap hubungi bidang IT untuk aktivasi', 'success');
        return redirect('/login');
    }
}
