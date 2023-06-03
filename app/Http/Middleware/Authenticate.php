<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{
    protected $adminRoute = 'admin.login';
    protected $userRoute  = 'user.login';
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if (! $request->expectsJson()) {
            if(Route::is('admin.*')){
                return route($this->adminRoute);
            } elseif (Route::is('user.*')){
                return route($this->userRoute);
            }
        }
    }
}
