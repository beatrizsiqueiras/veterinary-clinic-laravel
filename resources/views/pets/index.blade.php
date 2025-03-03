<x-layout>
    <x-slot:title>
        Show all pets
    </x-slot>

    <h1>
        This is the pet list
    </h1>

    @foreach ($pets as $pet)
        <ul>
            <li>Name: {{ $pet->name }}</li>
            <li>Age: {{ $pet->age }}</li>
        </ul>
        <br>
        <hr>
        <br>
    @endforeach
</x-layout>
