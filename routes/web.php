<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('about');
});

Route::get('/achievement', function () {
    return view('achievement');
})->name('achievement');

Route::get('/detail-achievement', function () {
    return view('detail-achievement');
})->name('achievement.detail');

Route::get('/add-achievement', function () {
    return view('add-achievement');
})->name('achievement.add');
