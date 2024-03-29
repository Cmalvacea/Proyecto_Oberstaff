<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{

    public function view(Request $request) {
        $DB = DB::connection('mysql');
        $customers = $DB->
        table('customers')
        ->leftJoin('regions', 'customers.id_reg', '=', 'regions.id_reg')
        ->leftJoin('communes', 'communes.id_reg', '=', 'customers.id_reg')
        ->where('customers.status', 'A')
        ->get();

        $regions = $DB->table('regions')->where('status', 'A')->get();


        return view('services/customers', [
            'regions' => $regions
        ]);

    }


    public function create(Request $request) {
        $DB = DB::connection("mysql");

        $DB->beginTransaction();


        $DB->table('customers')->insert([
            'dni' => $request->input('dni'),
            'id_reg' => $request->input('id_reg'),
            'id_com' => $request->input('id_com'),
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'last_name' => $request->input('lastname'),
            'password' => md5($request->input('password')),
            'address' => $request->input('address'),
            'date_reg' => date('Y-m-d h:m:s')
        ]);

        $DB->commit();

        return "Succesfull";

    }



    public function get(Request $request, $data) {

        $DB = DB::connection("mysql");




        $Result = $DB->table('customers')
        ->select('customers.dni', 
        'customers.status', 
        'customers.name', 
        'customers.email',
        'customers.last_name', 
        'customers.address', 
        'regions.description as region', 
        'communes.description as commune'
        )
        ->leftJoin('regions', 'regions.id_reg', '=', 'customers.id_reg')
        ->leftJoin('communes', 'communes.id_com', '=', 'customers.id_com')
        ->where('customers.status', 'A')
        ->where(function ($query) use($data) {
            $query->where('customers.dni', '=', $data)
            ->orWhere('customers.email', '=',$data);
        })
        ->first();

        if(!$Result) {
            return response('Customer not found', 404);
        }



        if(env('APP_ENV') == "local") {
            $stringLog = "Data return: ".$request->ip()." - ".json_encode($Result)." - ".date('d-m-Y h:i:s');
            $operacion = Storage::disk('logs')->prepend('security.log', $stringLog);

        }


        return $Result;


    }



    public function disable(Request $request) {
        $DB = DB::connection("mysql");

        $id = $request->input('id');

        

        $DB->table('customers')->where("dni", $request->input('id'))->update([
            'status' => "I"
        ]);

        return response('Customer disabled succesfully', 200);

    }

    
    public function delete(Request $request) {
        $DB = DB::connection("mysql");


        $DB->table('customers')->where("dni", $request->input('id'))->update([
            'status' => "trash"
        ]);

        return response('Customer deleted succesfully', 200);

    }

}
