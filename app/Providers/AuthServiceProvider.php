<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        // 'App\Models\Pegawai' => 'App\Policies\PegawaiPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdminCreate', function($user) {
           return $user->level == 1;
        });

        Gate::define('isAdminDetail', function($user) {
           return $user->level == 1;
        });

        Gate::define('isAdminUpdate', function($user) {
           return $user->level == 1;
        });

        Gate::define('isAdminDelete', function($user) {
           return $user->level == 1;
        });
    }
}
