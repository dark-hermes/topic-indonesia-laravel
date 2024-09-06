<?php

use App\Livewire\Auth\Login;
use App\Livewire\TopicIndonesia\Home;
use Illuminate\Support\Facades\Route;
use App\Livewire\TopicIndonesia\About;
use App\Livewire\TopicIndonesia\Gallery;


Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('gallery', Gallery::class)->name('gallery');
