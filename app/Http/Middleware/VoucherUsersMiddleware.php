<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\VoucherUsers;    


class VoucherUsersMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        $voucher_user = VoucherUsers::where("user_id",$request->user()->id)->first();

        if( !$voucher_user ){
            
            return response()->view('modules.vouchers.permission', [
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
