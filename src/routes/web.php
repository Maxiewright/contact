<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Maxie\Contact\Http\Controllers\ContactController;

Route::get('contact', [ContactController::class, 'index'])->name('contact');

Route::post('send', [ContactController::class, 'send'])->name('send');

