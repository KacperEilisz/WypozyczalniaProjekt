<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wypozyczalnia</title>
</head>
<body>

    @guest
        <a href="{{ route('register') }}">
            <button>Rejestracja</button>
        </a>

        <a href="{{ route('login') }}">
            <button>Logowanie</button>
        </a>
    @endguest

    @auth
        <p>Jesteś zalogowany!</p>
        <form action="/logout" method="POST">
            @csrf
            <button>Wyloguj</button>
        </form>
    @endauth

</body>
</html>