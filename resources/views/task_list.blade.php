@extends('layout')

@section('content')
    <div class="container">
        <H1>Tasks</H1>
        <div>
            <input id="textInput" class="custom" size="32"/>
            <button>Add new task</button>
        </div>
        <ul class="list-group">
            <li class="list-group-item"><button>Delete</button>First task</li>
        </ul>
    </div>

@endsection

