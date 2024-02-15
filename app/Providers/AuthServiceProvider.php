<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use WebDevEtc\BlogEtc\Gates\GateTypes;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define(GateTypes::MANAGE_BLOG_ADMIN, static function (User $user) {
            // Implement your logic here, for example:
            return $user && $user->email === 'trangthai01@gmail.com' && $user->is_admin === 1;
            // Or something like `$user->is_admin === true`
        });
        $this->registerPolicies();
    }
}
