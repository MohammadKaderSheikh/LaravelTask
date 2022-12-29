<?php

namespace App\Http\Controllers;
use App\Models\TaskModel;
use Illuminate\Http\Request;

class TaskManageController extends Controller
{
    public function ShowTask(){

       return TaskModel::all();

    }
}
