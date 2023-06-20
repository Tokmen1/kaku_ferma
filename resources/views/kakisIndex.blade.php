<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kaķi</title>
</head>
<body>
    <h1>kaķis</h1>
    @if (count($kakis) == 0)
        <p style="color: red;"> There are no records in the database!</p>
    @else
        <ul>
            @foreach ($kakis as $kaks)
                <li>
                <img src="{{ $kaks->image }}" alt="nava kakis" title="" />
                    <p>{{ $kaks->Vards }}</p>
                    <p>{{ $kaks->Dzimsanas_dati }}</p>
                    <p>Veselības stāvoklis: {{ $kaks->Veselibas_stavoklis }}</p>      
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>