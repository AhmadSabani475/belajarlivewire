<?php

use App\Livewire\Users;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/counter', Counter::class);
Route::get('/users', function(){
    return view('users');   
});
