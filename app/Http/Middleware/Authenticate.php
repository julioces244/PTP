<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
//use Illuminate\Auth\AuthenticationException;

use App\User;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
      //dd('alto');
        if (! $request->expectsJson()) {
          //dd( !$request->expectsJson());
            return route('login');
        }


    }
}
