<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('frontpage.landingpage');
});

Route::get('/about', function () {
    return view('frontpage.about');
})->name('about');
Route::get('/contak', function () {
    return view('frontpage.contak');
})->name('contak');
Route::get('/motor', function () {
    return view('frontpage.motor');
})->name('motor');
Route::get('/detail', function () {
    return view('frontpage.detail');
})->name('detail');




Route::get('/dashboard', DashboardController::class)->middleware(['auth'])->name('dashboard');

// profile
Route::get('/profile', [ProfileController::class, 'profile'])->middleware(['auth'])->name('profile');
Route::post('/profile', [ProfileController::class, 'change_profile'])->middleware(['auth'])->name('profile.change');

// change password
Route::get('/change-password', [ProfileController::class, 'password'])->middleware(['auth'])->name('change-password');
Route::post('/change-password', [ProfileController::class, 'change_password'])->middleware(['auth'])->name('change-password.change');

Route::middleware(['auth'])->resource('/car', CarController::class);
Route::middleware(['auth'])->resource('/pesan', PesanController::class);
Route::middleware(['auth'])->resource('/user', UserController::class);
Route::post('transaction/{transaction:id}/status', [TransactionController::class, 'status'])->middleware(['auth'])->name('transaction.status');
Route::middleware(['auth'])->resource('/transaction', TransactionController::class);



require __DIR__.'/auth.php';