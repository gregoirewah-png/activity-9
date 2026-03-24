@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <div class="jumbotron bg-light">
        <h1 class="display-4">Activity 9</h1>
        <p class="lead">Welcome to Activity 9. This is just a school activity.</p>
        <hr class="my-4">
        <p>You are currently browsing as a guest. To access more content, please log in.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Login</a>
        <a class="btn btn-outline-secondary btn-lg" href="{{ route('register') }}" role="button">Register</a>
    </div>
</div>
@endsection