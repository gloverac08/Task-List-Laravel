<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Task;

class TasksController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // retrieve all tasks from db and then inject them into view
    public function index() {
        Log::info('first log');
        $tasks = Task::all();
        return view('task_list')->with('tasks', $tasks); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validatedData = $request->validate([
            'body' => 'required|max:255',
        ]);

        $task = new Task;
        $task->body = $request->input('body');
        $task->save();

        return redirect('/tasks');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        Log::info('id in update:'.$id);
        Log::info('request->input in update:'.$request->input('body'));
        $task = Task::findOrFail($id);
        $task->body = $request->input('body');
        $task->save();

        return redirect('/tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Log::info('task id in destroy function '.$id);
        Task::findOrFail($id)->delete();

        return redirect('/tasks');
    }
}
