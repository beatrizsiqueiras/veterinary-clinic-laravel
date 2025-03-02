<?php

use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/pets', [PetController::class, 'index']);
Route::get('/pets/{id}', [PetController::class, 'show']);
Route::get('/pets/{id}/appointments', [PetController::class, 'showAppointments']);
Route::get('/pets/{id}/appointments/{appointmentId}', [PetController::class, 'showAppointment']);
