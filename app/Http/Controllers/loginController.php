<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class loginController extends Controller
{
    public function login(Request $request) {


        $adminUser = env('ADMIN_USER');
        $adminPassword = env('ADMIN_PW');

        $loginControl = ($adminUser == $request->input('user')) && ($adminPassword == $request->input
        ('password'));


        if($loginControl == false) {
            return view('login', [
                'error' => "User not found"
            ]);
        }


        /// Escribir log de inicio de sesion

        $stringLog = "Log In: ".$request->ip()." - ".date('d-m-Y h:i:s');
        $operacion = Storage::disk('logs')->prepend('security.log', $stringLog);



        /// Data de sesion

        $code = sha1($request->ip());
        $request->session()->put('token', $code);



        $fechaInicio = date('Y-m-d h:i:s');
        $fechaFin = date('Y-m-d h:i:s', strtotime('+1 hour', strtotime($fechaInicio)));



        DB::connection('mysql')->table('customSession')->insert([
            'token' => $code,
            'fechaInicio' => $fechaInicio,
            'fechaFin' => $fechaFin
        ]);


        return redirect('view/customers');


    }


    public function logout(Request $request) {
        $session = $request->session()->get('token');
        
        $stringLog = "Log Out: ".$request->ip()." - ".$session." - ".date('d-m-Y h:i:s');
        $operacion = Storage::disk('logs')->prepend('security.log', $stringLog);


        $request->session()->flush();

        return redirect('login');
    }

}
