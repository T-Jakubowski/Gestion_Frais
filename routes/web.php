<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Http\Controllers\UserController;

use App\Models\Role;
use App\Http\Controllers\RoleController;

use App\Models\Fiche_Frais;
use App\Http\Controllers\FicheFraisController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Login');
});

Route::get('/home', function () {
    return view('Home');
});

Route::get('/visiteur/create', function () {
    return view('Visiteur_Create');
});

Route::get('/user/affiche',[UserController::class, "show"]
);

Route::get('/role/affiche',[RoleController::class, "show"]
);

Route::get('/fiche_frais/affiche',[FicheFraisController::class, "show"]
);
