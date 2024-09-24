<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics</title>

    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex py-5 ">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                    <ul class="list-unstyled d-flex">
                        {{-- <li class="px-2 mt-2"><a class="text-decoration-none text-dark" href="{{ route('homepage') }}">Home</a></li> --}}
                        <li class="px-2 mt-2"><a class="text-decoration-none text-dark" href="{{ route('characters') }}">Characters</a></li>
                        <li class="px-2 mt-2"><a class="text-decoration-none text-dark">Comics</a></li>
                        <li class="px-2 mt-2"><a class="text-decoration-none text-dark">Movie</a></li>
                        <li class="px-2 mt-2"><a class="text-decoration-none text-dark">TV</a></li>
                        <li class="px-2 mt-2"><a class="text-decoration-none text-dark">Games</a></li>
                        <li class="px-2 mt-2"><a class="text-decoration-none text-dark">Collectibles</a></li>
                        <li class="px-2 mt-2"><a class="text-decoration-none text-dark">Videos</a></li>
                        <li class="px-2 mt-2"><a class="text-decoration-none text-dark">Fans</a></li>
                        <li class="px-2 mt-2"><a class="text-decoration-none text-dark">News</a></li>
                        <li class="px-2 mt-2"><a class="text-decoration-none text-dark">Shop</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>