<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HOLIDAYS-SEED</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>

        <header>
            <h1>RANDOM HOLIDAY</h1>
        </header>

        <main>
            <div class="maincontainer">
                @foreach ($packages as $package)
                    <div class="card">
                        <img src="{{ $package->img }}" alt="">
                        <div class="rowcard"><span>Destination: </span><p>{{ $package->name }}</p></div>
                        <div class="rowcard"><span>Start Date: </span><p>{{ $package->start_date }}</p></div>
                        <div class="rowcard"><span>Duration: </span><p>{{ $package->duration }} days</p></div>
                        <div class="rowcard"><span>Price: </span><p>{{ $package->price }} €</p></div>
                        <div class="rowcard"><span>Description: </span><p class="descp">{{ $package->desc }}</p></div>
                    </div>
                @endforeach
            </div>
        </main>
    </body>
</html>
