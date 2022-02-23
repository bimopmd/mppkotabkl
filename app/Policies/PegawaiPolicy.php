<?php

namespace App\Policies;

use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PegawaiPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function akses_tambah(User $user, Pegawai $pegawai)
    {
       return in_array($user->level, [1]);
    }
}
