<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {


        $projects = project::where('active', 1)->get();

//        $project->tools()->attach($request->input('tool_id'));
        return view('projecten', ['projects' => $projects]);
    }
}
