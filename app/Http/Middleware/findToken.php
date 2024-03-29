<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class findToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $session = $request->session()->get('token');
        $usuarioToken = DB::connection('mysql')->table('customSession')
        ->where('token', "=",$session)
        ->where('fechaFin', '>', date('Y-m:-d h:i:s'))
        ->first();

        
        if(!$usuarioToken) {
            $request->session()->flush();
            return redirect('login');
        } 

        return $next($request);
    }
}
