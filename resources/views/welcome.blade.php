@extends('layout')
<!-- Landing Page -->
@section('content')
<div class="flex-center position-ref full-height">
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

