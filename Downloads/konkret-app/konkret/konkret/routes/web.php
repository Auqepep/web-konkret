<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TicketController;



Route::middleware('web')->group(function () {
    Route::get('/', function () {
        $userName = Auth::check() ? Auth::user()->full_name : null;
        return view('landing-page', compact('userName'));
    })->name('landing-page');});


Route::get('/about', function () {
    return view('about'); 

});

Route::view('/ticket', 'ticket');
Route::view('/faq', 'faq');


Route::get('/sign-in',[AuthController::class, 'showSignInForm'])->name('sign-in');
Route::post('/sign-in',[AuthController::class, 'signIn'])->name('sign-in.post');
Route::get('/sign-up', [AuthController::class, 'showSignUpForm'])->name('sign-up');
Route::post('/sign-up',[AuthController::class, 'signUp'])->name('sign-up.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/reserve-ticket', [TicketController::class, 'store'])->name('ticket.reserve');
Route::get('/ticket-prices', [TicketController::class, 'getPrices'])->name('ticket.prices');