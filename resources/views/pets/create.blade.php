<x-layout>
    <x-slot:title>
        Novo
    </x-slot>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="d-flex justify-content-center col-12 mt-5">
        <div class="d-flex flex-column col-8 gap-5">
            <div class="col-12">
                <h2>Cadastrar Pet</h2>
            </div>

            <form class="d-flex justify-content-center" action="{{ route('pets.store') }}" method="POST">
                @csrf

                <div class="col-12">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="input" class="form-control" id="name" name="name">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="age" class="form-label">Idade:</label>
                            <input type="number" class="form-control" id="age" name="age">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="age" class="form-label">Informações adicionais:</label>
                            <textarea class="form-control" id="additional_information" name="additional_information">
                                </textarea>
                        </div>

                        <div class="col-6">
                            <label for="breed_id" class="form-label">Selecione a raça:</label>
                            <select class="form-select" id="breed_id" name="breed_id">
                                @foreach ($breeds as $breed)
                                    <option value="{{ $breed->id }}">{{ $breed->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <hr>

                    <div class="row col-6 bg-danger">
                        <div class="row" id="owners-list">
                            @foreach ($owners as $owner)
                                <div class="row d-none" id="owner-{{ $owner->id }}">
                                    <p>{{ $owner->name }}
                                        <input class="form-check-input mt-0" type="checkbox" value="{{ $owner->id }}"
                                            aria-label="Checkbox for following text input">
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-success">Criar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#example-getting-started').multiselect({
                buttonClass: 'form-select',
                templates: {
                    button: '<button type="button" class="multiselect dropdown-toggle" data-bs-toggle="dropdown"><span class="multiselect-selected-text"></span></button>',
                }
            });
        })
    </script>
</x-layout>
