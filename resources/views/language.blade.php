<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    <style>
        select#lang_sel{
            background-color: #333;
            color: white;
        }

        div.col-md-4{
            top: 18px;
            position: absolute;
            right: 180px;
        }
    </style>
</head>
<body>
    <div class="col-md-4">
                <select id="lang_sel"class="form-control changeLang" onChange="update()">
                    <option value="en">{{__("message.language")}} </option>
                    <option value="lv">Latviski</option>
                    <option value="en">English</option>
                </select>
                <h1 id="selected_lang">{{__("message.selLang")}}</h1>
    </div>
</body>
<script type="text/javascript">
			function update() {
				var select = document.getElementById('lang_sel');
				var option = select.options[select.selectedIndex];
                var url = "https://kakuferma.lv/" + option.value;

				location.replace(url);
			}
    </script>
</html>