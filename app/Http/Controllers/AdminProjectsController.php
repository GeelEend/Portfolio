<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\tool;
use Illuminate\Http\Request;

class AdminProjectsController extends Controller
{
    public function index() {
        $projects = Project::all();

        return view('admin.projects.index', [
            'projects' => $projects,
        ]);
    }
    public function edit(Project $project) {
        return view('admin.projects.edit', [
            'project' => $project,
            'tools' => Tool::all(),
        ]);
    }
    public function update(Project $project, Request $request) {
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->active = $request->input('active', 0);
        $project->text1 = $request->input('text1');
        $project->text2 = $request->input('text2');
        $project->text3 = $request->input('text3');
        $project->tools()->sync($request->input('tools'));


//        $this->uploadImage($project,$request, 'picture1');

        if ($request->hasFile('picture1')) {
            // als er al een foto is, die verwijderen
            if ($project->picture1 != '' && file_exists(storage_path($project->picture1))) {
                unlink(storage_path($project->picture1));
            }
            // opslaan ergens
            $path = $request->file('picture1')->store('images/projects');
            // als je 'm opgeslagen hebt, toevoegen aan project
            $project->picture1 = $path;
        }
        if ($request->hasFile('picture2')) {

            if ($project->picture2 != '' && file_exists(storage_path($project->picture2))) {
                unlink(storage_path($project->picture2));
            }
            $path = $request->file('picture2')->store('images/projects');
            $project->picture2 = $path;
        }

        if ($request->hasFile('picture3')) {
            if ($project->picture3 != '' && file_exists(storage_path($project->picture3))) {
                unlink(storage_path($project->picture3));
            }
            $path = $request->file('picture3')->store('images/projects');
            $project->picture3 = $path;
        }

        $project->save();


        return redirect()->route('admin.projects.list');
    }
    public function create() {
        return view('admin.projects.edit',[
            'project' => new Project(),
            'tools' => Tool::all(),
        ]);
    }

    public function store(Request $request) {
        $project = new Project();
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->active = $request->input('active', 0);
        $project->picture1 = $request->input('picture1');
        $project->picture2 = $request->input('picture2');
        $project->picture3 = $request->input('picture3');
        $project->text1 = $request->input('text1');
        $project->text2 = $request->input('text2');
        $project->text3 = $request->input('text3');

        if ($request->hasFile('picture1')) {
            // als er al een foto is, die verwijderen
            if ($project->picture1 != '' && file_exists(storage_path($project->picture1))) {
                unlink(storage_path($project->picture1));
            }
            // opslaan ergens
            $path = $request->file('picture1')->store('images/projects');
            // als je 'm opgeslagen hebt, toevoegen aan project
            $project->picture1 = $path;
        }
        if ($request->hasFile('picture2')) {

            if ($project->picture2 != '' && file_exists(storage_path($project->picture2))) {
                unlink(storage_path($project->picture2));
            }
            $path = $request->file('picture2')->store('images/projects');
            $project->picture2 = $path;
        }

        if ($request->hasFile('picture3')) {
            if ($project->picture3 != '' && file_exists(storage_path($project->picture3))) {
                unlink(storage_path($project->picture3));
            }
            $path = $request->file('picture3')->store('images/projects');
            $project->picture3 = $path;
        }

        $project->save();
        return redirect()->route('admin.projects.list')->with('status', 'U project is opgeslagen');
    }

    public function destroy(Project $project) {
        $project->delete();
        return redirect()->route('admin.projects.list')->with('status', 'U project is verwijderd');
    }

}


