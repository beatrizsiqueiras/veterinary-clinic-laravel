<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <title>Petshop - Show pet</title>
</head>

<body>
    <h1>
        This is the pet {{ $pet->id }}
    </h1>

    <ul>
        <li>Name: {{ $pet->name }}</li>
        <li>Age: {{ $pet->age }}</li>
    </ul>
</body>

</html>
