@extends('layout')

@section('content')
    <div class="container">
        <H1>Tasks</H1>
         <div class="panel-body">
        <!-- Display Validation Errors -->
        {{-- @include('common.errors') --}}
        <!-- New Task Form -->
            <form action="/tasks" method="POST" class="form-horizontal">
                @csrf
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

        <!-- Display all tasks -->
        <table class="table">
            <thead class="thead-light">
                <th>Tasks</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @if(count($tasks) > 0)
                @foreach($tasks as $task)
                    <tr class="table-text"> 
                        <td>
                            <div>{{$task->body}}</div>
                        </td>
                        <!-- Delete button -->
                        <td>
                            <form action="/tasks/{{$task->id}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <td>
                            <div class="edit">@include('edit_modal')</div>
                        </td>
                        
                    </tr>
                @endforeach
                @else
                    <tr>
                        <td>
                            <div>
                                No tasks saved yet. Add a new task
                            </div>
                        </td>
                    </tr>
                @endif
            </tbody>
 
    </div>

@endsection

