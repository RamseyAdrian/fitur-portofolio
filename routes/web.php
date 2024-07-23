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

// fitur work experience
Route::get('/work-experience', function () {
    return view('work-experience');
})->name('work-experience');

Route::get('/detail-work-experience', function () {
    return view('detail-work-experience');
})->name('work-experience.detail');

Route::get('/add-work-experience', function () {
    return view('add-work-experience');
})->name('work-experience.add');

// fitur share portofolio
Route::get('/share-portofolio', function () {
    return view('share-portfolio');
})->name('portofolio.share');

Route::get('/detail-portofolio', function () {
    return view('share-detail-portofolio');
})->name('portofolio.detail');

Route::get('/experience-portofolio', function () {
    return view('share-experience-portofolio');
})->name('portofolio.experience');

Route::get('/achievement-portofolio', function () {
    return view('share-achievement-portofolio');
})->name('portofolio.achievement');

Route::get('/work-portofolio', function () {
    return view('share-work-portofolio');
})->name('portofolio.work');
