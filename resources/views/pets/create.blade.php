<x-layout>
    <x-slot:title>
        Novo
    </x-slot>
    <form>
        <div class="mb-3">
            <label
                for="name"
                class="form-label"
            >Nome</label>
            <input
                type="input"
                class="form-control"
                id="name"
            >
        </div>
        <div class="mb-3">
            <label
                for="age"
                class="form-label"
            >Idade:</label>
            <input
                type="number"
                class="form-control"
                id="age"
            >
        </div>
        <button
            type="submit"
            class="btn btn-primary"
        >Submit</button>
    </form>
</x-layout>
