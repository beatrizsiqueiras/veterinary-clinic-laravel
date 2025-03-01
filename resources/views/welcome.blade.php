<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <title>Petshop - Welcome</title>
</head>

<body>
    <p>
        Hello laravel
    </p>

    @php
        $name = 'John Doe';
    @endphp

    @if (1)
        <p>
            This is {{ $name }}
        </p>
    @endif
</body>

</html>
