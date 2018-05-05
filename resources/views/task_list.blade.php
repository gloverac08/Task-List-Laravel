@extends('layout')

@section('content')
    <div class="container">
        <H1>Tasks</H1>
        <div>
            <input id="textInput" class="custom" size="32"/>
            <button>Add new task</button>
        </div>
        <ul class="list-group">
            @if(count($tasks) > 1)
                @foreach($tasks as $task)
                    <li class="list-group-item"><button>Delete</button>{{$task->body}}</li>
                @endforeach
            @else
                <p>No tasks saved yet. Add a new task</p>
            @endif
        </ul>
    </div>

@endsection

