<!DOCTYPE html>
<html>
<head>
  <title>Edit Kakis</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <style>
    div{
      padding-bottom: 5px;
    }
       button[type="submit"] {
        padding: 2px 4px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

    input[type="text"] {
        padding: 8px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 75%;
        margin-bottom: 10px;
        background-color: white;
        }
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}</style>
</head>

<body>
  <form action="{{ route('kakis.update', $kakis->Cipa_numurs) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" id="image" name="image">
      <img src="{{ $kakis->image }}" alt="Current Image" width="200">
    </div>
    <div class="form-group">
      <label for="cipa_numurs">Cipa Numurs:</label>
      <input type="text" id="cipa_numurs" name="cipa_numurs" value="{{ $kakis->Cipa_numurs }}">
    </div>
    <div class="form-group">
      <label for="vards">Vards:</label>
      <input type="text" id="vards" name="vards" value="{{ $kakis->Vards }}">
    </div>
    <div class="form-group">
      <label for="dzimsanas_dati">Dzimsanas Dati:</label>
      <input type="text" id="dzimsanas_dati" name="dzimsanas_dati" value="{{ $kakis->Dzimsanas_dati }}">
    </div>
    <div class="form-group">
      <label for="veselibas_stavoklis">Veselibas Stavoklis:</label>
      <input type="text" id="veselibas_stavoklis" name="veselibas_stavoklis" value="{{ $kakis->Veselibas_stavoklis }}">
    </div>
    <div class="form-group">
      <label for="nopirkts">Nopirkts:</label>
      <input type="text" id="nopirkts" name="nopirkts" value="{{ $kakis->Nopirkts }}">
    </div>
    <div class="form-group">
      <label for="vetarsts_pk">Vetarsts PK:</label>
      <input type="text" id="vetarsts_pk" name="vetarsts_pk" value="{{ $kakis->Vetarsts_PK }}">
    </div>
    <div class="form-group">
      <button type="submit">Update</button>
    </div>
  </form>
</body>
</html>