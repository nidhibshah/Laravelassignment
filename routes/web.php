<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController; //added because using controller
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

/*Route::get('/', function () {
    return view('home');
});
/*Route::get('/home/{slug}', function ($slug) {
    return view('home',["slug"=>$slug]);
});*/
Route::get('/', [WelcomeController::class,'index']);

