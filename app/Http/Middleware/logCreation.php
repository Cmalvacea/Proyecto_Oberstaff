<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Storage;


class logCreation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $stringLog = "Data created: ".$request->ip()." - ".json_encode($request->input())." - ".date('d-m-Y h:i:s');
        $operacion = Storage::disk('logs')->prepend('security.log', $stringLog);
        return $next($request);
    }
}
