<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fiets Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/global.css"rel="stylesheet">
    </head>

<header class= "header">
    <nav class="menu"> 
    <div class="titel">Fiets Blog</div>
        <ul>
            <li><a href="{{ url('/') }} ">Home</a></li>
            <li><a href="{{ url('blogs') }} ">Blog Maken</a></li>
            <li><a href="#">Over Ons</a></li>
            <li><a href="#"><strong>Log In</strong></a></li>
</ul>
</nav>
</header>
    <body>
        @yield('content')
    </body>
</html>