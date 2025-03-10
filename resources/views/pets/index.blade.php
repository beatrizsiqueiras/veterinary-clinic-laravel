<x-layout>
    <x-slot:title>
        Pets
    </x-slot>

    <div class="d-flex justify-content-end">
        <a
            class="btn btn-success"
            href="/pets/create"
        >
            <i class="fa-solid fa-circle-plus"></i>
            Pet
        </a>
    </div>

    <table class="table">
        <thead>

            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
                <th scope="col">Raça</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>

            @foreach ($pets as $pet)
                <tr>
                    <th scope="row">{{ $pet->id }}</th>
                    <td>{{ $pet->name }}</td>
                    <td>{{ $pet->age }}</td>
                    <td>{{ $pet->breed_name }}</td>
                    <td>
                        <div class="d-flex justify-content-around">
                            <div class="dropdown">
                                <button class="btn btn-ligth dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Editar</a></li>
                                  <li><a class="dropdown-item" href="/pets/{{ $pet->id }}/appointments">Ver atendimentos</a></li>
                                </ul>
                              </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>
