<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::livewire('/date-opening-hours', 'date-opening-hours');
Route::livewire('/organizer', 'organizer');
Route::livewire('/official-partners', 'official-partners');
Route::livewire('/venue', 'venue-page');
Route::livewire('/sponsorship-packages', 'sponsorship-packages');
Route::livewire('/i-want-to-visit', 'i-want-to-visit');
