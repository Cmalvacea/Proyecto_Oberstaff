<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Storage;

class validateCreationData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $validated = $request->validate([
            'dni' => 'required|max:99999999999|numeric',
            'id_com' => 'required',
            'id_reg' => 'required',
            'email' => 'required|max:55',
            'password' => 'required|max:55',
            'name' => 'required|max:55',
            'lastname' => 'required|max:55'
        ]);


        if(!$validated) {
            return response("All fields are required", 400);
        }

        $DB = DB::connection('mysql');


        $check = $DB->table('customers')
        ->where(function (Builder $query) use($request) {
            $query->where('customers.dni', $request->input('dni'))
            ->orWhere('email', $request->input('email'));
        })
        ->first();


        if($check) {
            return response("DNI or Email already in use", 400);
        }


        $checkRegion = $DB->table('communes')
        ->where('id_reg', $request->input('id_reg'))
        ->where('id_com', $request->input('id_com'))
        ->exists();

        if(!$checkRegion) {
            return response("Region and commune doesn't match", 400);
        }

        $stringLog = "Data created: ".$request->ip()." - ".json_encode($request->input())." - ".date('d-m-Y h:i:s');
        $operacion = Storage::disk('logs')->prepend('security.log', $stringLog);

        return $next($request);
    }
}
