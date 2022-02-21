<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $fillable = [
        'nip_pegawai',
        'nama_pegawai',
        'instansi_pegawai',
        'alamat_ktp_pegawai',
        'nope_pegawai',
        'foto_pegawai'
    ];
}
