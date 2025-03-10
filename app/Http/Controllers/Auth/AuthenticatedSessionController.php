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

        $users_modules = DB::table("users_modules")->where("user_id", Auth::user()->id)->get();

        if ($users_modules->isEmpty()) { 
            return redirect(route('empty_module', absolute: false));
        } 
    
        if ($users_modules->count() == 1) {

            $whatModule = DB::table("modules")->where("module", $users_modules[0]->module )->first();
            
            return redirect(route($whatModule->route, absolute: false));
        }

        if ($users_modules->count() > 1) {
            return redirect(route('chooser', absolute: false));
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
