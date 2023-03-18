<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ExcursionsController;
use App\Http\Controllers\AuthController;
use App\Models\Excursion;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;

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

Route::get('/', [ExcursionsController::class, 'show'])->name('site.home');
Route::get('/perfil', [AuthController::class, 'dashboard'])->name('perfil');
Route::get('/minhas-excursoes', [AuthController::class, 'excursions'])->name('perfil.excursoes');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('perfil.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('perfil.logout');
Route::post('/login/do', [AuthController::class, 'authenticate'])->name('perfil.login.do');
Route::get('/cadastro', [AuthController::class, 'showSignupForm'])->name('perfil.cadastro');
Route::post('/cadastro', [ClientsController::class, 'store']);
Route::post('/alteracao', [ClientsController::class, 'update']);
Route::get('/excursions/{id}', [ClientsController::class, 'showExcursionDetails']);
Route::get('/teste', function () {
    return view('teste');
});
Route::get('/load_funcoes', [ClientsController::class, 'loadFuncoes'])->name('load_funcoes');
Route::post('/load_funcoes', [ClientsController::class, 'loadFuncoes'])->name('load_funcoes22');
Route::post('/excursions/join/{id}', [ClientsController::class, 'joinExcursion'])->middleware('auth:admin');
Route::delete('/excursions/leave/{id}', [ClientsController::class, 'leaveExcursion'])->middleware('auth:admin');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

