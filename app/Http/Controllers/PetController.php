<?php

namespace App\Http\Controllers;

use App\Models\Breed;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PetController extends Controller
{
    public function show(string $id): View
    {
        $pet = Pet::find($id);

        return view('pets.show', ['pet' => $pet]);
    }

    public function index(Request $request): View
    {
        $pets = Pet::when(
            $request->age,
            fn ($query) =>
                $query->where('age', '=', $request->age)
        )->when(
            $request->name,
            fn ($query) => $query->orWhere('name', $request->name)
        )
            ->orderBy('id')
            ->get();

        return view('pets.index', ['pets' => $pets]);
    }

    public function showAppointments(Request $request): View
    {
        $pet = Pet::where('id', $request->id)
            ->with([
                'appointments' => function ($query) use ($request) {
                    $query;
                },
            ])
            ->first();

        return view('pets.appointments.index', [
            'pet' => $pet,
        ]);
    }

    public function showAppointment(Request $request): View
    {
        return view('pets.appointments.show', ['appointmentId' => $request->appointmentId]);
    }

    public function create(): View
    {
        $breeds = Breed::all();

        return view('pets.create', ['breeds' => $breeds]);
    }

    public function store(Request $request): void
    {
        dd($request->all());
    }

}
