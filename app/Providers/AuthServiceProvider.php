<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('edit-users', function (User $user) {
            return $user->isAdmin
                        ? Response::allow()
                        : Response::deny('You must be an administrator.');
        });
        Gate::define('delete-users', function (User $user) {
            return $user->isAdmin
                        ? Response::allow()
                        : Response::deny('You must be an administrator.');
        });
        Gate::define('add-users', function (User $user) {
            return $user->isAdmin
                        ? Response::allow()
                        : Response::deny('You must be an administrator.');
        });
        Gate::define('update-users', function (User $user) {
            return $user->isAdmin
                        ? Response::allow()
                        : Response::deny('You must be an administrator.');
        });
        //
    }
}
