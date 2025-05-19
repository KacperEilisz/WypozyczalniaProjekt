@extends('layouts.main_layout')

@section('content')
    <h2>Logowanie</h2>
    <form action="/login" method="POST">
        @csrf
        <input name="loginname" type="text" placeholder="Nazwa użytkownika">
        <input name="loginpassword" type="password" placeholder="Hasło">
        <button>Zaloguj</button>
    </form>
@endsection