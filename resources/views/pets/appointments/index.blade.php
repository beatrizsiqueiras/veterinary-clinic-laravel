<x-layout>
    <x-slot:title>
        Atendimentos
    </x-slot>

    <h4>Atendimentos de {{ $pet->name }}</h4>
    <div class="mt-4">
        <table class="table">
            <thead>

                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Data</th>
                    <th scope="col">Hora</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pet->appointments as $appointment)
                    <tr>
                        <th scope="row">{{ $appointment->id }}</th>
                        <td>{{ $appointment->date }}</td>
                        <td>{{ $appointment->time }}</td>
                        <td>
                            <div class="d-flex justify-content-around">
                                <a href=""><i class="fa fa-pen"></i></a>
                                <a href="/pets/{{ $pet->id }}/appointments">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layout>
