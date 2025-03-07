<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use DB;
use Auth;
use App\Models\UserModules;

class ModuleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $module): Response
    {

        $moduleCheck = UserModules::where("module", $module)
                        ->where( "user_id", Auth::user()->id )
                        ->first();

        if( !$moduleCheck ){

            return redirect('/permission');

        }

        return $next($request);
    }
}
