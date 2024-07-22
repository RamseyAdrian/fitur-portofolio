<?php

use Illuminate\Support\Facades\Route;

//Fitur About
Route::get('/', function () {
    return view('about');
})->name('about');

Route::get('/add-about', function () {
    return view('add-about');
})->name('about.add');

//Fitur Experience
Route::get('/experience', function () {
    return view('experience');
})->name('experience');

Route::get('/detail-experience', function () {
    return view('detail-experience');
})->name('experience.detail');

Route::get('/add-experience', function () {
    return view('add-experience');
})->name('experience.add');

//Fitur Achievement
Route::get('/achievement', function () {
    return view('achievement');
})->name('achievement');

Route::get('/detail-achievement', function () {
    return view('detail-achievement');
})->name('achievement.detail');

Route::get('/add-achievement', function () {
    return view('add-achievement');
})->name('achievement.add');
