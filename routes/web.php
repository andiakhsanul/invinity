<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\papercontroller;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\GuestMiddleware;
use App\Mail\PaymentConfirmationEmail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\seminarController;


Route::get('/', [HomeController::class, 'landing'])->name('landing');
Route::get('/paper', [HomeController::class, 'paper'])->name('paper');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/guide', [HomeController::class, 'guide'])->name('guide');
Route::get('/guest/seminar', [HomeController::class, 'seminar'])->name('seminar.index');
Route::get('commite', [HomeController::class, 'Commite'])->name('commite');

Route::post('/seminar/store', [seminarController::class, 'store'])->name('seminar.store');
Route::put('/paper/update', [papercontroller::class, 'update'])->name('paper.update');
Route::get('/seminar/create', [seminarController::class, 'create'])->name('admin.seminar.create');
Route::get('/seminar/all', [seminarController::class, 'indexAdmin'])->name('admin.seminar.index');
Route::post('/paper/submit', [papercontroller::class, 'submit'])->name('paper.submit');


Route::prefix('admin')->middleware(AdminMiddleware::class)->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout.admin');

    // Papers
    Route::get('/papers/all', [papercontroller::class, 'index'])->name('paper.index');
    Route::get('/paper/edit/{id}', [papercontroller::class, 'edit'])->name('paper.edit');
    Route::get('/paper/delete/{id}', [papercontroller::class, 'delete'])->name('paper.delete');
    Route::get('/paper/approve/{id}', [papercontroller::class, 'showApprove'])->name('paper.approve');
    Route::put('/paper/update-status/{id}', [papercontroller::class, 'approve'])->name('paper.approved');

});

Route::prefix('auth')->name('auth.')->middleware(GuestMiddleware::class)->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::get('/create-account', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'attempt_register'])->name('attempt_register');
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
});
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');



Route::get('/kirimemail', [PaymentConfirmationEmail::class, 'index']);
Route::get('/send-email', [papercontroller::class, 'sendEmail'])->name('paper.sendEmail');