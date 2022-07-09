<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/test', [TestController::class, 'test']);


Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');


Route::get('/custom', function(){
    $message = "Mensaje desde web.php";

    return view('custom', ['message' => $message]);
});
