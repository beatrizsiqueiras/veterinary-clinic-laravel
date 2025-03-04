<x-layout>
    <x-slot:title>
        Novo
    </x-slot>

    <form
        class="d-flex justify-content-center mt-5"
        action="{{ route('pets.store') }}"
        method="POST"
    >
        @csrf

        <div class="col-8">
            <div class="row">
                <div class="col-6 mb-3">
                    <label
                        for="name"
                        class="form-label"
                    >Nome</label>
                    <input
                        type="input"
                        class="form-control"
                        id="name"
                        name="name"
                    >
                </div>
                <div class="col-6 mb-3">
                    <label
                        for="age"
                        class="form-label"
                    >Idade:</label>
                    <input
                        type="number"
                        class="form-control"
                        id="age"
                        name="age"
                    >
                </div>
            </div>
            <div class="row">
                <div class="col-6 mb-3">
                    <label
                        for="age"
                        class="form-label"
                    >Informações adicionais:</label>
                    <textarea
                        class="form-control"
                        id="additional_information"
                        name="additional_information"
                    >
                    </textarea>
                </div>

                <div class="col-6">
                    <label
                        for="breed_id"
                        class="form-label"
                    >Selecione a raça:</label>
                    <select
                        class="form-select"
                        id="breed_id"
                        name="breed_id"
                    >
                        @foreach ($breeds as $breed)
                            <option value="{{ $breed->id }}">{{ $breed->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-12">
                <button
                    type="submit"
                    class="btn btn-primary"
                >Submit</button>
            </div>
        </div>
    </form>
</x-layout>
