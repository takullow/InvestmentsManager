@extends('layouts.base')
@section('title', 'Logout Page')

@section('content')
    <form method='post' action="{{ route('logout.execute') }}">
        @csrf
        <h3>Logout</h3>
        <div style="display: block;">
            <p>Are you sure you want to log out now?</p>
            <input type="submit" name='cancel' value='Cancel'>
            <input type="submit" name='execute' value="Log Out">
        </div>
    </form>
@endsection