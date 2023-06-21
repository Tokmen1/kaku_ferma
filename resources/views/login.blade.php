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
        .login-box {
            width: 300px;
            margin: auto;
            margin-top: 1px;
            margin-right: 1px;
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
            position: relative;
            right: 0;
            top: 0;
            border-radius: 4px;
        }

        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 2px;
            margin-bottom: 2px;
            border-radius: 4px;
        }

        .login-box input[type="submit"] {
            border-radius: 4px;
            width: 50%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            padding-top: 1px;
            padding-bottom: 1px;
        }
        
        .login-box #signup[type="submit"] {
            width: 50%;
            padding: 10px;
            background-color: white;
            border-radius: 4px;
            color: black;
            border: none;
            cursor: pointer;
            padding-top: 1px;
            padding-bottom: 1px;
        }
        
        input#login:hover{
            background-color: #3e8e41;
        }
        input#signup:hover{
            background-color: #808080;
        }

    </style>
</head>
<body>


<div class="login-box">
    <h2>{{__("message.title")}}</h2>
    <form method="POST">
        @csrf
        <input type="text" name="username" placeholder="{{__("message.user")}}" required><br>
        <input type="password" name="password" placeholder="{{__("message.pass")}}" required><br>
        <input type="submit" id="login" value="{{__("message.login")}}">
        <input type="submit" id="signup" value="{{__("message.signin")}}">
    </form>
</div>

</body>
</html>