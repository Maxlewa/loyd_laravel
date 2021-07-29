<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/nft', [FrontController::class, 'nft'])->name('nft');
Route::get('/music', [FrontController::class, 'discography'])->name('discography');
Route::get('/tour', [FrontController::class, 'tour'])->name('tour');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/gallery', [FrontController::class, 'gallery'])->name('gallery');
Route::get('/press', [FrontController::class, 'press'])->name('press');
Route::get('/links', [FrontController::class, 'links'])->name('links');

// ---------- MAIL FORM ----------

Route::post('/mail/store', [MailController::class, 'store'])->name('mailStore');