<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
</head>
<body>

<a href="{{ route('home') }}">
    <button>Powrót</button>
</a>
 
<div style="border: 3px solid black;">
        <h2>Rejestracja</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="name">
            <input name="email" type="text" placeholder="email">
            <input name="password" type="password" placeholder="password">
            <button>Zarejestruj</button>
        </form>
    </div>    
</body>
</html>