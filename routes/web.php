<?php

use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Users;
use App\Livewire\Contack;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;
Route::get('/', Home::class);
Route::get('/about', About::class);
Route::get('/Contack', Contack::class);

Route::get('/counter', Counter::class);
Route::get('/users', Users::class);
