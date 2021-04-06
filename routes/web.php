<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SpecialtieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ImageController;

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
    return view('app');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'getInformation'])->name('profile');

    Route::resource('specialties', SpecialtieController::class);
    // Route::get('/specialties', [SpecialtieController::class, 'getSpecialties'])->name('specialties.index');

    Route::resource('address', AddressController::class);

    Route::get('imageupload', [ImageController::class, 'index'])->name('image.upload');
    Route::post('imageupload', [ImageController::class, 'uploadImage'])->name('image.upload.post');
});

require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
