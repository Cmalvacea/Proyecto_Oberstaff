<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\regionsController;
use App\Http\Controllers\communesController;
use App\Http\Controllers\loginController;

use App\Http\Middleware\findToken;
use App\Http\Middleware\redirectFromLogin;
use App\Http\Middleware\validateCreationData;
use App\Http\Middleware\validateUpdate;
use App\Http\Middleware\validateSearch;
use App\Http\Middleware\logCreation;







use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('', function() {
    return redirect('/login');
});
Route::middleware([redirectFromLogin::class])->group(function () {
    Route::get('/login', function () {
        return view('login', [
            'error' => null
        ]);
    });
    Route::post('/login', [loginController::class, 'login']);
});

Route::get('/logout', [loginController::class, 'logout']);


Route::middleware([findToken::class])->group(function () {

    Route::prefix('view')->group(function() {

        /// Vistas
        Route::get('/customers', [CustomerController::class, 'view']);

    });

    Route::prefix('crud')->group(function() {

        Route::get('/customers/get/{query}', [CustomerController::class, 'get']);
        Route::post('/customers/create', [CustomerController::class, 'create'])->middleware([validateCreationData::class]);


        Route::middleware([validateUpdate::class])->group(function () {
            Route::delete('/customers/disable', [CustomerController::class, 'disable']);
            Route::delete('/customers/delete', [CustomerController::class, 'delete']);
        });

    });
});

Route::prefix('utilities')->group(function () {
    Route::get('/getCommunes/{id_reg}', [communesController::class, 'getCommunes']);
});

