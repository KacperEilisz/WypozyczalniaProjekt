<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>

<a href="{{ route('home') }}">
    <button>Powrót</button>
</a>
 
<div style="border: 3px solid black;">
        <h2>Logowanie</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="loginname" type="text" placeholder="name">
            <input name="loginpassword" type="password" placeholder="password">
            <button>Zaloguj</button>
        </form>
    </div>
</body>
</html>