<?php

use App\Http\Controllers\EventsController;
use Illuminate\Support\Facades\Route;


Route::get('events/{id}', [EventsController::class, 'show'])->name('events.show');
