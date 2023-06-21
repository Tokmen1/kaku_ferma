<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kaķi</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
                <!-- Styles -->
                <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}
    .material-icons {
        color: orange;
    }

    a{
        color: black;
        text-decoration:none;
        border: solid 1px #4CAF50;
        padding: 4px 6px;
        background: #4CAF50;
        color: white;
        border-radius: 4px;
    }
    button#del{
        color: black;
        text-decoration:none;
        padding: 2px 4px;
        background: red;
        color: white;
        border-radius: 4px;
        margin-top: 10px;
    }

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
</head>

<body>
    @if (count($kakis) == 0)
        <p style="color: red;"> There are no records in the database!</p>
    @else
    <ul>
        @foreach ($kakis as $kaks)
            <li>
                <div class="image-container">
                    <img src="{{ $kaks->image }}" alt="nava kakis" title="" />
                    <!-- <img src="{{ asset('http://localhost:8000/storage/kakis_images/cat.jpg') }}" height="100px" width="100px" alt=""> -->
                    <div class="info">
                        <p>{{ $kaks->Vards }}</p>
                        <p>{{ $kaks->Dzimsanas_dati }}</p>
                        <p><i class="material-icons">star</i>{{ $kaks->Veselibas_stavoklis }}</p>
                        <a href="{{ action([App\Http\Controllers\KakisController::class, 'edit'],['kakis' => $kaks->Cipa_numurs ])}}">Edit</a>
                        <form method="POST"
                        action="{{ route('kakis.destroy', ['kakis' => $kaks->Cipa_numurs] )}}">
                        @csrf
                        @method('DELETE')
                        <button id="del" type="submit" value="delete">Delete</button>
                        </form>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    @endif
</body>
<script type="text/javascript">
    document.getElementById("editButton").onclick = function () {
        location.href = {{ action([App\Http\Controllers\KakisController::class, 'edit'],['kakis' => '$kaks->Cipa_numurs'])}};
    };
</script>
</html>