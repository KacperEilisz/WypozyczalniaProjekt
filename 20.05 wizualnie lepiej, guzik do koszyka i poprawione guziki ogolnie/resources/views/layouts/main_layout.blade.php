{{--widok glowny strony do zrobienia extends z contentem--}}
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wypozyczalnia</title>
</head>
<body>

   {{--naglowek strony--}}
<header style="border-bottom: 1px solid black; padding: 10px; display: flex; justify-content: space-between; align-items: center;">
    
    {{--elementy po lewej--}}
    <div>
        <a href="{{ route('home') }}"><button>Strona główna</button></a>

        @auth
            <a href="{{ route('shopping_cart') }}"><button>Koszyk</button></a>
        @endauth

        @guest
            <a href="{{ route('register') }}"><button>Rejestracja</button></a>
            <a href="{{ route('login') }}"><button>Logowanie</button></a>
        @endguest
    </div>

    {{--elementy po prawej--}}
    @auth
    <div>
        <span>Zalogowano jako {{ Auth::user()->name }}</span>
        <form action="/logout" method="POST" style="display: inline;">
            @csrf
            <button>Wyloguj</button>
        </form>
    </div>
    @endauth
</header>

    {{--miejsce na content--}}
    <main style="padding: 20px;">
        @yield('content')
    </main>

</body>
</html>