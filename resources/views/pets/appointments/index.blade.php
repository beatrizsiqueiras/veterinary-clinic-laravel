<x-layout>
    <x-slot:title>
        Show all appointments of this pet
    </x-slot>

    <h1>
        This is all appointments of this pet: {{ $pet->name }}
    </h1>

    @foreach ($pet->appointments as $appointment)
        <ul>
            <li>Date: {{ $appointment->date }}</li>
            <li>Hour: {{ $appointment->time }}</li>
        </ul>
        <br>
        <hr>
        <br>
    @endforeach
</x-layout>
