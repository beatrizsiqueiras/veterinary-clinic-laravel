<x-layout>
    <x-slot:title>
        Pets
    </x-slot>

    <div class="d-flex justify-content-end">
        <a
            class="btn btn-success"
            href="/pets/create"
        >
            Criar
            <i class="fa-solid fa-circle-plus"></i>
        </a>
    </div>

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
                            <a href=""><i class="fa fa-pen"></i></a>
                            <a href="/pets/{{ $pet->id }}/appointments">
                                <i class="fa-solid fa-book-medical"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>
