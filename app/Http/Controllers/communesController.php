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

        return $communes;
    }

}
