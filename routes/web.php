<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/generate', [\App\Http\Controllers\CertificateController::class, "generate"])->name("generate");
