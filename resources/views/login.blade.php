@extends('layouts.base')
@section('title', 'Login Page')

@section('content')
    <form method='post' action="{{ route('mypage.login') }}">
        @csrf
        <h3>Login</h3>
        <div style="display: block;">
            <input type="text" name='mail_address' placeholder='e-mail address'>
            <input type="text" name='password' placeholder='password'>
            <button>Login</button>
        </div>
    </form>
@endsection