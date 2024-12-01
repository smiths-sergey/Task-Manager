<?php

use App\Http\Controllers\SoapController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SoapController::class, 'index']);
Route::post('/convert', [SoapController::class, 'handleRequest'])->name('soap.convert');
