<?php

use App\Models\Appointment;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/pets', function (Request $request) {
    $pets = Pet::when(
        $request->age,
        fn ($query) =>
            $query->where('age', '=', $request->age)
    )->when(
        $request->name,
        fn ($query) =>
            $query->orWhere('name', $request->name)
    )
    ->orderBy('name', 'desc')
    ->paginate(3);

    return view('pets.index', ['pets' => $pets]);
});

Route::get('/pets/{id}', function (Request $request) {
    $pet = Pet::find($request->id);

    return view('pets.show', ['pet' => $pet]);
});

Route::get('/pets/{petId}/appointments', function (Request $request) {
    $pet = Pet::where('id', $request->petId)
        ->with([
            'appointments' => function ($query) use ($request) {
                $query->where('date', '2025-03-30');
            },
            'appointments.doctors'
        ])
        ->first();

    return view('pets.appointments.index', [
        'pet' => $pet,
    ]);
});

Route::get('/pets/{id}/appointments/{appointmentId}', function (Request $request) {
    return view('pets.appointments.show', ['appointmentId' => $request->appointmentId]);
});
