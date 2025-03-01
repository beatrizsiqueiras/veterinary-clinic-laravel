<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <title>Petshop - Show all appointments of this pet</title>
</head>

<body>
    <h1>
        This is all appointments of this pet: {{ $pet->name }}
    </h1>

    @foreach ($pet->appointments as $appointment)
        <ul>
            <li>Date: {{ $appointment->date }}</li>
            <li>Hour: {{ $appointment->time }}</li>
        </ul>
        <br>
        <hr>
        <br>
    @endforeach
</body>

</html>
