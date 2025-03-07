<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use DB;
use App\Models\PageVisit;
use Auth;


class LogUserPageVisit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {



        if (Auth::check()) {
            
            PageVisit::create([
                "user_id" => Auth::id(),
                "url" => $request->fullUrl(),
                "ip" => $request->ip()
            ]);
            
        } else {

            PageVisit::create([
                "user_id" => Auth::id(),
                "url" => $request->fullUrl(),
                "ip" => $request->ip()
            ]);
    
        }
        
    
        return $next($request);
    }
}
