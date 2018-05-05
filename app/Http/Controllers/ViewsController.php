<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function welcome () {
        return view('welcome');
    }

    public function task_list () {
        return view('task_list');
    }
}
