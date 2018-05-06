@extends('layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif
    
    <div class="content">
        <div class="title m-b-md">
            Task List
        </div>
        <div class="links">
             <!-- Routes to Tasks Page -->
            <form action="/tasks" method="GET">
                @csrf
                <button class="btn btn-secondary btn-lg">Enter</button>
            </form>
        </div>
    </div>
</div>
@endsection

