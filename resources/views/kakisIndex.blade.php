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
                <div class="image-container">
                    <img src="{{ $kaks->image }}" alt="nava kakis" title="" />
                    <div class="info">
                        <p>{{ $kaks->Vards }}</p>
                        <p>{{ $kaks->Dzimsanas_dati }}</p>
                        <p>Veselības stāvoklis: {{ $kaks->Veselibas_stavoklis }}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    @endif
</body>
<style>
    ul {
        list-style: none;
        padding: 0;
    }

    li {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .image-container {
        position: relative;
        height: 100vh; /* Adjust this value if needed */
    }

    img {
        height: 100%;
        width: auto;
    }

    .info {
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        padding: 10px;
        background-color: rgba(255, 255, 255, 0.7); /* Adjust the background color and opacity */
    }
</style>
</html>