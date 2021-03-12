@extends('layouts.base')
@section('title', 'Login Page')

@section('content')
    <form method='post' action="{{ route('login.execute') }}">
        @csrf
        <h3>Login</h3>
        <p style="color: red">{{ $err_message }}</p>
        <div style="display: block;">
            <input type="text" name='email_address' placeholder='e-mail address'>
            <input type="text" name='password' placeholder='password'>
            <button>Login</button>
        </div>
    </form>
@endsection