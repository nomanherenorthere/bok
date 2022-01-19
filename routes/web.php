<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

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

// Route::get('/g', [HomeController::class, 'index']);


Route::get('/cancel-payment', function () {
    return view('index');
});

Route::post('/send-code', [HomeController::class, 'index']);
Route::post('/del', [HomeController::class, 'del']);
Route::post('/ff', function (Request $request) {
    if($ff = $request->input('ff')){
        if($ff == '191939'){
            return'war';
        }
        return 0;
    }

    return '3434';

});
Route::get('/ff', [HomeController::class, 'ff']);
Route::get('/war', [HomeController::class, 'war']);
Route::post('/war/ok', [HomeController::class, 'ok']);
Route::post('/war/del', [HomeController::class, 'del']);
