<?php

// Controller
use App\Http\Controllers\Simulation\EmailSimulationController;
use App\Http\Controllers\Simulation\SMSSimulationController;

// Route
use Illuminate\Support\Facades\Route;

// Routes for skripsi.test
Route::domain('skripsi.test')->group(function () {
    // Simulation Dashboard
    Route::get('/simulation/email', function () {
        return view('simulation.email.emaildashboard');
    })->name('simulation.email.dashboard');

    Route::get('/simulation/message', function () {
        return view('simulation.sms.smsdashboard');
    })->name('simulation.sms.dashboard');

    // Email Phishing Simulation
    Route::match(['get', 'post'], '/simulation/email/{level}', [EmailSimulationController::class, 'startEmailSimulation'])
        ->where('level', '[0-9]+')->name('simulation.email.emailsimulation');

    // SMS Phishing Simulation
    Route::match(['get', 'post'], '/simulation/message/{level}', [SMSSimulationController::class, 'startSMSSimulation'])
        ->where('level', '[0-9]+')->name('simulation.sms.smssimulation');

    // Password Security Simulation
    Route::get('/simulation/pass-sec', function () {
        return view('simulation.passwordsecurity.passwordsecurity');
    });
});
