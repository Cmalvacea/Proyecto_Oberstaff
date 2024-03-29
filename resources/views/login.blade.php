<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @include('./partials/externalCss')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/login.css') }}">
</head>
<body>
    <form action="/login" method="post">
        <p>Customer Manager</p>
        @if ($error !== null)
            <p class="error"> {{$error}} </p>
        @endif
        @csrf
        <input required type="text" id="user" name="user" placeholder="Username">
        <input required type="password" id="password" name="password" placeholder="Password">
        <div>
            <button type="submit">Sign In</button>
        </div>
    </form>
    
    
</body>
</html>