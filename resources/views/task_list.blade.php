@extends('layout')

@section('content')
    <div class="container">
        <H1>Tasks</H1>
         <div class="panel-body">
        <!-- Display Validation Errors -->
        {{-- @include('common.errors') --}}
        <!-- New Task Form -->
            <form action="/tasks" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <!-- Task Name -->
                <div class="form-group">
                    <div class="col-sm-6">
                        <input type="text" name="body" id="task-body" class="form-control">
                    </div>
                </div>

                <!-- Add Task Button -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-plus"></i> Add Task
                        </button>
                    </div>
                </div>
            </form>
        </div>

        {{-- diplay all tasks --}}
        <ul class="list-group">
            @if(count($tasks) > 0)
                @foreach($tasks as $task)
                    <li class="list-group-item"><button>Delete</button>{{$task->body}}</li>
                @endforeach
            @else
                <p>No tasks saved yet. Add a new task</p>
            @endif
        </ul>
    </div>

@endsection

