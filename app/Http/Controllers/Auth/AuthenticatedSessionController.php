<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use DB;


class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $modules = DB::table("users_modules")->where("user_id", Auth::user()->id);

        if( $modules ){

             dd($modules);

            if( count($modules) == 0  ){

                return redirect()->intended(route('home', absolute: false));

            } 
            elseif( count($modules) == 1  ){

                return redirect()->intended(route('home', absolute: false));

            } 
            else {

                return redirect()->intended(route('vouchers_home', absolute: false));
            }

        } else {

            return redirect()->intended(route('vouchers_home', absolute: false));

        }

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/supervendor');
    }
}
