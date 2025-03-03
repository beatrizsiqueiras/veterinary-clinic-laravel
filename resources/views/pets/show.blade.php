<x-layout>
    <x-slot:title>
        Show pet
    </x-slot>


    <h1>
        This is the pet {{ $pet->id }}
    </h1>

    <ul>
        <li>Name: {{ $pet->name }}</li>
        <li>Age: {{ $pet->age }}</li>
    </ul>
</x-layout>
