<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}
        </style>
    </head>
    <body class="antialiased">
        <div class="top">
            <p class="view">{{__("message.lac")}}</p>
            <button id="myButton" class="view">{{__("message.sc")}}</button>
            <div id="popup">
                @include('kakisCreate')
                
            </div>
            <div class="col-md-4">
                @include('language')
            </div>
            <div id="logins">@include('login')</div>
        </div>
        
        <div id="main">
            <div id="side">
                <div id="search-div">
                <form method="POST">
                    <input type="text" id="search" name="search" placeholder="{{__("message.inputing")}}"><br>
                    <button type="submit">{{__("message.searching")}}</button>
                </form>
                </div>
                <div id="sorting">
                </div>
            </div>
            <div id="laravelis">
                <iframe id="kakis_rada" src="https://kakuferma.lv/kakis" title="description"></iframe>
            </div>
        </div>  
        <!-- Div main beidzās -->
    </body>
    <style>
        div#popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            height: 200px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            padding: 20px;
            color: black;
            width: 40%;
            height: 40%;
            border: 2px solid #D3D3D3;;
        }


        iframe#kakis_rada{
            height: 735px;
            width: 100%;
        }

        div#search-div{
            margin: 0;
            padding: 40px 0 20px 20px;
            border: solid;
            border-color: #333;
        }
        div#search-div input[type="text"] {
        padding: 8px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 75%;
        margin-bottom: 10px;
        }

        div#search-div button[type="submit"] {
        padding: 8px 8px;
        font-size: 14px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        div#search-div button[type="submit"]:hover {
        background-color: #45a049;
        }


        div#side{
            width: 20%;
            float: left;
            background-color: #D3D3D3;
            color: black;
        }

        div #laravelis{
            width: 80%;
            float: left;
            background-color: white;
        }



            div.top p {
                color: white;
                padding: 32px 60px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                float: left;
                text-align: center;
                margin-top: 40px;
                margin-bottom: 40px;
                border-style: solid;
                border-width: 0 1px 0 0;
                border-color: white;
                height: 100px;
                font-size: 25px;
                margin-right: 30px;
                
            }
            div.top button {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                cursor: pointer;
                float: left;
                margin-left: 50px;
                margin-top: 55px;
                font-size: 25px;
                border-radius: 4px;

            }

            div.top button:hover {
                background-color: #3e8e41;
            }
            

            .top {
            background-color: #333;
            color: #fff;
            padding: 10px;
            }

    </style>
    <script>
        document.getElementById("myButton").addEventListener("click", function() {
            document.getElementById("popup").style.display = "block";
        });

        // document.addEventListener("click", function(event) {
        //     var popup = document.getElementById("popup");
        //     var button = document.getElementById("myButton");
        //     if (event.target != popup && event.target != button) {
        //         popup.style.display = "none";
        //     }
        // });
    </script>
</html>
