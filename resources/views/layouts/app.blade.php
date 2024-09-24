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
                        <li class="px-2 mt-2"><a class="nav-link {{ Route::currentRouteName() === 'characters' ? 'active' : ''}}" href="{{ route('characters') }}">Characters</a></li>
                        <li class="px-2 mt-2"><a class="nav-link {{ Route::currentRouteName() === 'comics' ? 'active' : ''}}"" href="{{ route('comics')}}">Comics</a></li>
                        <li class="px-2 mt-2"><a class="nav-link {{ Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="{{ route('movies') }}">Movies</a></li>
                        <li class="px-2 mt-2"><a class="nav-link {{ Route::currentRouteName() === 'tv' ? 'active' : ''}}" href="{{ route('tv') }}">TV</a></li>
                        <li class="px-2 mt-2"><a class="nav-link {{ Route::currentRouteName() === 'games' ? 'active' : ''}}" href="{{ route('games') }}">Games</a></li>
                        <li class="px-2 mt-2"><a class="nav-link {{ Route::currentRouteName() === 'collectibles' ? 'active' : ''}}" href="{{ route('collectibles') }}">Collectibles</a></li>
                        <li class="px-2 mt-2"><a class="nav-link {{ Route::currentRouteName() === 'videos' ? 'active' : ''}}" href="{{ route('videos') }}">Videos</a></li>
                        <li class="px-2 mt-2"><a class="nav-link {{ Route::currentRouteName() === 'fans' ? 'active' : ''}}" href="{{ route('fans') }}">Fans</a></li>
                        <li class="px-2 mt-2"><a class="nav-link {{ Route::currentRouteName() === 'news' ? 'active' : ''}}" href="{{ route('news') }}">News</a></li>
                        <li class="px-2 mt-2"><a class="nav-link {{ Route::currentRouteName() === 'shop' ? 'active' : ''}}" href="{{ route('shop') }}">Shop</a></li>
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