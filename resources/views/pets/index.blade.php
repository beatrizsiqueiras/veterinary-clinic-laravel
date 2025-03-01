<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <title>Petshop - Show all pets</title>
</head>

<body>
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
</body>

</html>
