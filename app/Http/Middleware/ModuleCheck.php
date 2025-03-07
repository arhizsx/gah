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

            return response()->view('modules.system.permission', [
                'requestDetails' => [
                    'ip' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                    'method' => $request->method(),
                    'url' => $request->fullUrl(),
                ]
            ]);

        }

        return $next($request);
    }
}
