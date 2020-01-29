@extends('layouts.base')

@section('title', 'Registration')



@section('content')
<div class="flex-center position-ref full-height">
    <h1 style="margin-right:30px">Log In</h1>
    <div class="links">
        <a href="/">Return</a>
    </div>
    <form method="POST" action="/login">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
    @include('messages.errors')
</div>
@endsection
