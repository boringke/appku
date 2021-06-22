<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Todos;

use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Login;

// Redirect dari Home -> Dashboard
Route::redirect('/', '/dashboard', 301);


// Route untuk authenticate user
Route::middleware(['auth'])->group(function() {

    // Dashboard
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    // Profile
    Route::get('/profile', Profile::class)->name('profile');

    // Todo List
    Route::get('/todo', Todos::class)->name('todo');

    // Contoh Error 500
    Route::get('/500', function () {
        if (App::environment('demo')) { Config::set('app.debug', true); }
        echo $fail;
    });

});


// Route untuk guest (tak login)
Route::middleware('guest')->group(function() {

    // Login
    Route::get('/login', Login::class)->name('login');

    // Register
    Route::get('/register', Register::class)->name('register');

});
