@extends('layouts.base')

@section('title', 'Settings')


@section('content')

<div class="flex-center position-ref full-height">
    <h1 style="margin-right:30px">Settings</h1>
    <div class="links">
        <a href="/">Return</a>
    </div>
    <div class="content">
        <form method="POST" action="/register">

            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{{ Auth::user()->name }}}">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{{ Auth::user()->email }}}">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Pass:</label>
                <input type="password" class="form-control" id="password_confirmation"
                       name="password_confirmation">
            </div>

            <div class="form-group">
                <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        @include('messages.errors')
    </div>
</div>
@endsection
