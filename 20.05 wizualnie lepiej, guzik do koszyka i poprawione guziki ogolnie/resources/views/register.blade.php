@extends('layouts.main_layout')

@section('content')
    <h2>Rejestracja</h2>
    <form action="/register" method="POST">
        @csrf
        <input name="name" type="text" placeholder="Imię">
        <input name="email" type="text" placeholder="Email">
        <input name="password" type="password" placeholder="Hasło">
        <button>Zarejestruj</button>
    </form>
@endsection