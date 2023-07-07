<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewsController;
use App\Models\Reviews;
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

// UI routes
Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about', [
        'reviews' => Reviews::latest()->take(3)->get()
    ]);
});

Route::get('/food', function () {

    $tmrw = new DateTimeImmutable('tomorrow');

    return view('food', [
        'tmrw' => $tmrw->format('Y-m-d')
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

// Customer Post Routes
Route::post('/reviews', [ReviewsController::class, 'store']);
Route::post('/reservation', [ReservationController::class, 'store']);


// Breeze Routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
