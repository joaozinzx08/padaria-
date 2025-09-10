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

Route::get('/bakery', [Principalcontroller::class, 'bakery']);

Route::get('/sobre', [Principalcontroller::class, 'sobre']);

Route::get('/contato',[Principalcontroller::class, 'contato']);