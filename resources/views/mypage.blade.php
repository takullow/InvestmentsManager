@extends('layouts.base')
@section('title', 'Mypage')

@section('content')
    <p>Hello, User.</p>

    <p>e-mail adress: {{ $mail_address }}</p>
    <p>password: {{ $password }}</p>
@endsection