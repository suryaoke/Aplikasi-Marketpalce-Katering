<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckBanned
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is attempting to login
        if ($request->isMethod('post') && $request->has('username') && $request->has('password')) {
            $credentials = $request->only('username', 'password');

            // Check if the username is provided and not empty
            if (empty($credentials['username'])) {
                $notification = array(
                    'message' => 'Username or Password harus diisi..!!',
                    'alert-type' => 'error'
                );

                return redirect()->route('login')->with($notification);
            }

            // Attempt to authenticate the user

        }

    }
}
