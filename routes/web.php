<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PayPalController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\GuestController;

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
Route::get('/setup', function () {
    $link = Artisan::call('storage:link');
    $migrate = Artisan::call('migrate');
    dd($link, $migrate);
})->middleware('auth');

// Route::view('pay', 'payment');
Route::get('guests', [GuestController::class, 'index'])->name('guests')->middleware('auth');
Route::post('edit/{id}', [GuestController::class, 'edit']);
Route::post('delete/{id}', [GuestController::class, 'delete']);
Route::post('create', [GuestController::class, 'create']);

Route::get('buy', [PayPalController::class, 'createTransaction'])->name('createTransaction');
Route::get('buy/{id}', [PayPalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
