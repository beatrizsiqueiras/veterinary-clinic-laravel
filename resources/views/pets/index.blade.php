<x-layout>
    <x-slot:title>
        Show all pets
    </x-slot>

    <table class="table">
        <thead>

            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>

            @foreach ($pets as $pet)
                <tr>
                    <th scope="row">{{ $pet->id }}</th>
                    <td>{{ $pet->name }}</td>
                    <td>{{ $pet->age }}</td>
                    <td>
                        <div class="d-flex justify-content-around">
                            <a href=""><i class="bi bi-pen"></i></a>
                            <a href="/pets/{{ $pet->id }}/appointments"><i class="bi bi-journal-medical"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>
