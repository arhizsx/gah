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
        
        $voucher_user = VoucherUsers::find($request->user()->id);

        if( !$voucher_user ){
            return response()->json(['message' => 'Unauthorized'], 403);
        }
        
        return $next($request);
    }
}
