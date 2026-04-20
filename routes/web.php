<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/greetings', function(){
    $user = User::all();
    return view('greetings', compact('user'));
});