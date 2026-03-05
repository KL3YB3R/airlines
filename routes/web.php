<?php

use App\Livewire\Pax\ManagePax;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::controller(ManagePax::class)->group(function () {
    Route::get('pax', 'render')->name('pax.index');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
