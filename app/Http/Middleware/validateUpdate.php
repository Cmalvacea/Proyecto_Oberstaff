<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class validateUpdate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $validation = $request->validate([
            'id' => "required"
        ]);

        if(!$validation) {
            return response("Field cannot be null", 404);
        }

        $id = $request->input('id');

        $userActive = DB::connection('mysql')->table('customers')->where('dni', $id)->where('status', 'A');

        if(!$userActive) {
            return response('Customer not found', 404);
        }

        $stringLog = "Update attempt: ".$request->ip()." - ".json_encode($request->input())." - ".date('d-m-Y h:i:s');
        $operacion = Storage::disk('logs')->prepend('security.log', $stringLog);



        return $next($request);
    }
}
