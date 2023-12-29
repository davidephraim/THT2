@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ url('/register') }}">
        @csrf

        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <button type="submit">Sign Up</button>
    </form>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
@endsection
