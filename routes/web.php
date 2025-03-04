<?php

use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Route;

Route::get('/pets', [PetController::class, 'index']);
Route::get('/pets/create', [PetController::class, 'create']);
Route::get('/pets/{id}', [PetController::class, 'show']);
Route::get('/pets/{id}/appointments', [PetController::class, 'showAppointments']);
Route::get('/pets/{id}/appointments/{appointmentId}', [PetController::class, 'showAppointment']);
