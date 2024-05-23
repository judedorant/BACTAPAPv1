<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\userController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\signController;
use App\Http\Controllers\Client\profile;
use App\Http\Controllers\Client\uploadPost;






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

Route::get('/',[AuthenticatedSessionController::class, 'create']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::
Route::middleware(['auth', 'role:admin'])->group(function (){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

    // Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                // ->name('logouts');
});

Route::middleware(['auth', 'role:client'])->group(function (){
    Route::get('/getNewsfeed', [userController::class, 'getNewsfeed'])->name('newsfeed');
   Route::get('/client', [userController::class, 'index'])->name('clientdashboard');
   Route::get('/clientProfile', [profile::class, 'index'])->name('clientprofile');
    Route::post('/uploadPost', [uploadPost::class, 'uploadPost'])->name('postupload');


   // Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                // ->name('logouts');
});



