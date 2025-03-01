<?php

use App\Models\Pet;
use Illuminate\Support\Facades\Route;

Route::get('/pets', function () {
    return response()->json(Pet::all());
});

Route::post('/pets', function () {
    $pet = new Pet();

    $pet->name = 'top';
    $pet->age = '3';

    $pet->save();

    return response()->json($pet);
});
