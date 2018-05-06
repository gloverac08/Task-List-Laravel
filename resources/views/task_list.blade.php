@extends('layout')

@section('content')
    <div class="container-fluid heading">
        <H1 class="title">Task List</H1>
    </div>
    <div class="container">
    
        <div class="card new-task">
        <!-- Display Validation Errors -->
        {{-- @include('common.errors') --}}
        <!-- New Task Form -->
            <div class="card-header">
                <h4>Add a new task</h4>
            </div>
            <div class="card-body">
            <form action="/create" method="POST" class="form-horizontal col-6">
                @csrf
                <!-- Task Name -->
                <div class="form-group">
                    <div class="col-7">
                        <input type="text" name="body" id="task-body" class="form-control">
                    </div>
                </div>

                <!-- Add Task Button -->
                <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-secondary">
                    <i class="fa fa-plus"></i> Add Task
                        </button>
                </div>
                </div>
            </form>
        </div>
        </div>
        <!-- Display all tasks -->
        <div class="card tasks">
            <div class="card-header">
               <h3>Tasks</h3>
            </div>
        <table class="table">
            <tbody>
                @if(count($tasks) > 0)
                @foreach($tasks as $task)
                    <tr class="table-text"> 
                        <td class="col-6">
                            <h5>{{$task->body}}</h5>
                        </td>
                        <td class="col-1">
                            <form action="/tasks/{{$task->id}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        
                        <td class="edit col-1">@include('edit_modal', ['text' => $task->body, 'id' => $task->id])</td>
                    
                        <!-- Delete button -->
                        {{-- <td>
                            
                        </td>
                        <td>
                            
                        </td> --}}
                        
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
 
    </div>
@endsection

