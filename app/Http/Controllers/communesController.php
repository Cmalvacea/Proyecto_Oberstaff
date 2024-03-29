<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class communesController extends Controller
{

    public function getCommunes(Request $request, $id_reg) {
        $communes = DB::connection('mysql')->table('communes')->where('id_reg', $id_reg)->get();

        
        if(env('APP_ENV') == "local") {
            $stringLog = "Data return: ".$request->ip()." - ".json_encode($communes)." - ".date('d-m-Y h:i:s');
            $operacion = Storage::disk('logs')->prepend('security.log', $stringLog);

        }

        return $communes;
    }

}
