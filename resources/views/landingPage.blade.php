<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
</head>
<style>
    body {
        background-color: #584910;
    }

    #line1 {
        width: 2000px;
        padding: 3px;
        background-color: #D4AF37;
        transform: rotate(46deg);
        position: fixed;
        margin-left: 11%;
        margin-top: 20%;
        z-index: 999;
    }

    #line2 {
        width: 2000px;
        padding: 3px;
        background-color: #D4AF37;
        transform: rotate(-11deg);
        position: fixed;
        margin-left: -50px;
        margin-top: 23%;
        z-index: 999;
    }

    #line3 {
        width: 2000px;
        padding: 3px;
        background-color: #D4AF37;
        transform: rotate(-64deg);
        position: fixed;
        margin-left: -840px;
        margin-bottom: 60%;
        z-index: 999;
    }

    .circle1 {
        width: 140px;
        height: 140px;
        position: fixed;
        border-radius: 50%;
        background-color: #D4AF37;
        opacity: 0.5;
        margin-left: 40px;
        margin-top: 110px;
        z-index: 999;
    }

    .circle2 {
        width: 125px;
        height: 125px;
        position: fixed;
        border-radius: 50%;
        background-color: #D4AF37;
        opacity: 0.5;
        margin-left: 1100px;
        margin-top: 500px;
        z-index: 999;
    }

    .circle3 {
        width: 100px;
        height: 100px;
        position: fixed;
        border-radius: 50%;
        background-color: #D4AF37;
        opacity: 0.5;
        margin-left: 900px;
        margin-top: 70px;
        z-index: 999;
    }

    #button-4 {
        position: relative;
        overflow: hidden;
        cursor: pointer;
        transition: all 0.5s ease;
    }

    #button-4:hover {
        transform: scale(1.2);
    }

    #button-4 a {
        position: relative;
        transition: all .45s ease-Out;
    }

    #underline {
        width: 100%;
        height: 2.5px;
        margin-top: 15px;
        align-self: flex-end;
        left: -200px;
        background: #D4AF37;
        position: absolute;
        transition: all .3s ease-Out;
        bottom: 0;
    }

    #button-4:hover #underline {
        left: 0;
    }

    .button {
        display: inline-flex;
        height: 40px;
        width: 150px;
        border: 1px solid #D4AF37;
        margin: 20px 20px 20px 20px;
        color: #D4AF37;
        text-transform: uppercase;
        text-decoration: none;
        font-size: .8em;
        letter-spacing: 1.5px;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    a {
        color: #FFD700;
        text-decoration: none;
        font-size: 25px;
        letter-spacing: 1px;
    }
</style>

<body>
    <div id="line1"></div>
    <div id="line2"></div>
    <div id="line3"></div>
    <div class="circle1"></div>
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="row" style="position: absolute;top:50%;left:50%;transform:translate(-50%,-50%);z-index:1000">
        <div class="col">
            <img src="{{ asset('images/logo.png') }}" alt="logo" width="400" style="filter: brightness(200%);">
        </div>
        <div class="col">
            <div class="button" id="button-4" style="left:25%">
                <div id="underline"></div>
                <a href="#">Let's Go!</a>
            </div>
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                <br>
                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </div>
</body>

</html>