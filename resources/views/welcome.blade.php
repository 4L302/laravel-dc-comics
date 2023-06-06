<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container">
        <h1>DC Comics</h1>
        <section class="justify-content-center align-items-center">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-12 col-sm-6 col-md-4 col-mg-3">
                        <div class="card">
                            <h3 class="card-title">
                                {{ $comic->title }}
                            </h3>
                            <div class="card-body">
                                {{--  --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>

</body>

</html>