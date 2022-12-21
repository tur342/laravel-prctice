<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/mail/send', 'App\Http\Controllers\TestController@send');

Route::group(['middleware' => ['auth', 'can:admin_only']], function () {
    Route::get('/gate/test', 'App\Http\Controllers\TestGateController@index')->name('GateTest');
});

Route::get('/member', 'App\Http\Controllers\MemberController@index') ->name('members');
Route::get('/gate/test1', 'App\Http\Controllers\TestGateController@index') ->name('GateTest');