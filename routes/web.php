<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeightGraphController;
use App\Http\Controllers\WebPushController;
use App\Http\Controllers\EventController;
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
Route::get('/calendar', [EventController::class, 'show'])->name("show"); 

Route::get('/', function () {
    return view('welcome');
});
Route::get('/graph', [WeightGraphController::class,"show"])
   ->name("show_graph");
   
Route::get('/paginate', [WeightGraphController::class,"paginate"]);
   
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/linelogin', [App\Http\Controllers\LineLoginController::class, 'lineLogin'])->name('linelogin');
Route::get('/callback', [App\Http\Controllers\LineLoginController::class, 'callback'])->name('callback');


Route::get('web_push/create', [WebPushController::class,"create"]);
Route::post('web_push', [WebPushController::class,"store"]);