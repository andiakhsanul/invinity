<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('landing');

// Route::get('/home', function () {
//     return view('homepage');
// });

Route::get('/seminar', function () {
    return view('conference');
});

Route::get('/paper', function () {
    return view('paper');
});

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::prefix('admin')->group(function(){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    // Papers
    Route::get('/papers', function () {
        return view('admin.paper.index');
    });

    // Seminars
    Route::get('/seminars', function () {
        return view('admin.seminars.index');
    });

    // Participants
    Route::get('/participants', function () {
        return view('admin.participants.index');
    });

    // Payment
    Route::get('/all-payment', function () {
        return view('admin.payment.index');
    });

});



