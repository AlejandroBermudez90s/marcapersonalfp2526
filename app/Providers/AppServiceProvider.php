<?php

namespace App\Providers;

use App\Models\Curriculo;
use App\Models\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider{

    public function boot(): void {

        ResetPassword::createUrlUsing(function (object $notifiable, string $token) {

            return config('app.frontend_url')."/password-reset/$token?email={$notifiable->getEmailForPasswordReset()}";
        });


        Gate::define('owner', function (User $user, $recurso, $ownerField = 'user_id') {

            if (!$recurso || !$recurso->hasAttribute($ownerField)){
                return false;
            }

            return $user->id === $recurso->user_id;
        });
    }
}
