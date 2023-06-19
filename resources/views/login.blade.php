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
        }

        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 2px;
            margin-bottom: 2px;
        }

        .login-box input[type="submit"] {
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
            color: black;
            border: none;
            cursor: pointer;
            padding-top: 1px;
            padding-bottom: 1px;
        }

    </style>
</head>
<body>


<div class="login-box">
    <h2>Login</h2>
    <form method="POST">
        @csrf
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Log In">
        <input type="submit" id="signup" value="Sign Up">
    </form>
</div>

</body>
</html>