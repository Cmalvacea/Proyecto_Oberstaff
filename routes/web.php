<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\regionsController;
use App\Http\Controllers\communesController;
use App\Http\Controllers\loginController;


/// These are the custom middlewares
/// Find them in app/Http/Middleware
use App\Http\Middleware\findToken; /// This is a more rudimentary version of Laravel sanctum made by me
use App\Http\Middleware\redirectFromLogin; /// This redirects you from login to the management view if you area already logged
use App\Http\Middleware\validateCreationData; /// This makes the necessary validations when you create a new customer
use App\Http\Middleware\validateUpdate; // This checks if the record that you are gonna update hasn´t been deleted previously







use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


/// Login functions, they are only a few, if you want to make modifications go to app/Http/Controllers/loginController.php

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



/// CRUD routes
// Detailed in app/Http/customerController.php, here is only the declaration


Route::middleware([findToken::class])->group(function () {

    Route::prefix('view')->group(function() {

        /// Views
        /// If you want to know how does the JS works for this view, go to public/assets/js/app.js
        Route::get('/customers', [CustomerController::class, 'view']);

    });

    Route::prefix('crud')->group(function() {

        // Read
        Route::get('/customers/get/{query}', [CustomerController::class, 'get']);

        /// Create
        Route::post('/customers/create', [CustomerController::class, 'create'])->middleware([validateCreationData::class]);


        //// Delete
        Route::middleware([validateUpdate::class])->group(function () {
            Route::delete('/customers/disable', [CustomerController::class, 'disable']);
            Route::delete('/customers/delete', [CustomerController::class, 'delete']);
        });

    });


    
    /// This is the route used to get all communes by region
    /// The controller for this function is communesController, there is no regionController as it was saw as unnecessary
    Route::prefix('utilities')->group(function () {
        Route::get('/getCommunes/{id_reg}', [communesController::class, 'getCommunes']);
    });


});

