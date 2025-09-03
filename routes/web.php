<?php

use App\Http\Controllers\Principalcontroller;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/padaria', [Principalcontroller::class, 'bakery'])->name('bakery');

Route::get('/sobre', function (){return view('sobre');})->name('sobre');

Route::get('/contato', function (){return view('contato');})->name('contato');

Route::post('/contato',[Principalcontroller::class, 'enviarContato']);