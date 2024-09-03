<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;

class AdminToolsController extends Controller
{
    public function index() {
        $tools = tool::all();

        return view('admin.tools.index', [
            'tools' => $tools,
        ]);
    }

    public function create() {
        return view('admin.tools.edit',[
            'tool' => new tool(),
        ]);
    }

    public function store(Request $request) {
        $tools = new tool();
        $tools->title = $request->input('title');
        $tools->save();

        return redirect()->route('admin.tools.list');
    }

    public function destroy(Tool $tool) {
        $tool->delete();
        return redirect()->route('admin.tools.list')->with('status', 'U tool is verwijderd');
    }
}
