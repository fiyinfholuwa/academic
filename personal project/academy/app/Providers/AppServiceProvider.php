<?php

namespace App\Providers;
use App\Models\AdminRole;
use App\Models\AppChat;
use App\Models\Consultation;
use Auth;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            if (Auth::check()) {
                $user_role = Auth::user()->user_role;
                $permission = null;

                $unread_messages = Appchat::where('user_id', '=', Auth::user()->id)->where('counsellor_status', '=', 'pending')->get();

                if (!is_null($user_role)) {
                    $permission = AdminRole::where('id', $user_role)->first();
                    $permissions = json_decode($permission->permission, true);
                    $view->with('permissions', $permissions);
                }

                $consultations = Consultation::where('status', '=', NULL)->get();
                
                $view->with('unread_messages', $unread_messages);
                $view->with('consultations', $consultations);
            }
        });
    }
}
