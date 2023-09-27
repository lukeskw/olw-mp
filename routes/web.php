<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/login', \App\Livewire\Login::class)
    ->middleware(['guest'])
    ->name('login');
Route::get('/logout', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])
//    ->middleware(['signed'])
    ->name('logout');
Route::get('login/{email}', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'login'])
    ->middleware(['signed'])
    ->name('login.store');


Route::get('/checkout', \App\Livewire\Checkout::class)->name('checkout');

Route::get('/pedido-criado/{order_id}', \App\Livewire\Result::class)
    ->middleware(['signed'])
    ->name('checkout.result');

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
//
//require __DIR__.'/auth.php';
