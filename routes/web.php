<?php

// Controller
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResetPasswordController;

// Route
use Illuminate\Support\Facades\Route;


// Dashboard Pages
Route::get('/', function () {
    return view('dashboardpages.home');
})->name('home');

Route::get('/games', function () {
    return view('dashboardpages.games');
});

Route::get('/simulation', function () {
    return view('dashboardpages.simulation');
});

Route::get('/assessment', function () {
    return view('dashboardpages.assessment');
})->name('assessment');

// Profile Menu
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
Route::post('/profile/update-username', [ProfileController::class, 'updateUsername'])->name('profile.updateUsername');
Route::post('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');

// Login and Registration Pages
Route::get('/loginregis', [AuthController::class, 'showloginregis'])->name('login');
Route::post('/loginregis', [AuthController::class, 'loginOrRegister'])->name('loginOrRegister');


Route::middleware('auth')->group(function () {
    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Email Verification Notice route
    Route::get('/email/verify', [AuthController::class, 'verifyEmailNotice'])->name('verification.notice');

    // Email Verification Handler route
    Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'verifyEmailHandler'])->middleware('signed')->name('verification.verify');

    // Resending the Verification Email route
    Route::post('/email/verification-notification', [AuthController::class, 'verifyEmailResend'])->middleware('throttle:6,30')->name('verification.send');
});

// Forgot Password
Route::middleware('guest')->group(function () {
    Route::get('/forgetpassword', function () {
        return view('forgetpass');
    })->name('password.request');
    Route::post('/forgetpassword', [ResetPasswordController::class, 'passwordEmail']);
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'passwordReset'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'passwordUpdate'])->name('password.update');
});

require __DIR__.'/admin.php';
require __DIR__.'/assessment.php';
require __DIR__.'/domain.php';
require __DIR__.'/games.php';
require __DIR__.'/simulation.php';
require __DIR__.'/submission.php';










































// - PG soal yang udah keluar jangan dikeluarin lagi - Done
// - Bikin end page dari gamenya - ada scorenya, tombol home, tombol try again
// - Validasi score yang didapat biar bisa ditunjukkin di halaman akhir dan munculin respon yang berbeda tiap divisi skornya

// To Do - Trivia
// - Cari tahu bisa pake background music. trus kalo bisa bikin validasi musicnya ada pas main game doang - Masih mencari
// - Bikin end page - Maksimalin lagi nanti
