<?php

use Illuminate\Support\Facades\Route;

use EskayAmadeus\LaravelAuthPackage\Greetr;

Route::get('/greet/{name}', function ($name) {
    $myGreetr = new Greetr();
    return $myGreetr->greet($name);
});

// Dummy route
// ==========
Route::get('/dummy', function () {
    return [
        'message' => 'This is going to be deleted soon.'
    ];
});