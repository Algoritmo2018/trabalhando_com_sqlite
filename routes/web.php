<?php

use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //Login com usuario 2
    //Auth::loginUsingId(2);

    //Fazer logout
    Auth::logout();
    return view('welcome');
});

Route::get("pdf", [PDFController::class,'index']);

Route::post("pdf", [PDFController::class,'store'])->name('pdf.store');
