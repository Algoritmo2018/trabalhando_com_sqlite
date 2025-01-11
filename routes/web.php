<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //Login com usuario 2
    //Auth::loginUsingId(2);

    //Fazer logout
    Auth::logout();
    return view('welcome');
});
