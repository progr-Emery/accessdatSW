<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::view('/', 'welcome');
Route:: group([ 'middleware' => 'auth:sanctum' , 'verified'],
    function(){
        Route::resource('user', UserController::class);
    }
);
