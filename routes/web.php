<?php

use App\Models\project;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('home');
//})->name('home');

Route::get('/', function() {
    $projects = project::where('active', 1)->get();
    return view('home', [
        'projects' => $projects
    ]);
})->name('home');

Route::get('/over-mij', function () {
    return view('overmij');
})->name('about-me');

// projects
Route::get('/projecten', ['App\Http\controllers\ProjectController', 'index']);
Route::get('admin/projecten', ['App\Http\controllers\adminprojectscontroller', 'index'])->middleware(['auth'])->name('admin.projects.list');
Route::get('/admin/projecten/edit/{project}', ['App\Http\controllers\adminprojectscontroller', 'edit'])->middleware(['auth'])->name('admin.projects.edit');
Route::post('/admin/projecten/edit/{project}', ['App\Http\controllers\adminprojectscontroller', 'update'])->middleware(['auth']);
Route::get('/admin/projects/create', ['App\Http\Controllers\AdminProjectsController', 'create'])->middleware('auth')->name('admin.projects.create');
Route::post('/admin/projects/create', ['App\Http\Controllers\AdminProjectsController', 'store'])->middleware('auth');
Route::delete('/admin/projects/destroy/{project}', ['App\Http\Controllers\AdminProjectsController', 'destroy'])->middleware('auth')->name('admin.projects.destroy');

// contact
Route::get('/contact', ['App\Http\Controllers\AdmincontactController', 'create'])->name('contact');
Route::post('/contact', ['App\Http\Controllers\AdmincontactController', 'store']);
Route::get('admin/contact', ['App\Http\Controllers\AdmincontactController', 'index'])->middleware(['auth'])->name('admin.contact.list');
Route::delete('/admin/contact/destroy/{contact}', ['App\Http\Controllers\AdmincontactController', 'destroy'])->middleware('auth')->name('admin.contact.destroy');

// tools
Route::get('/admin/tools/create', ['App\Http\Controllers\AdminToolsController', 'create'])->middleware(['auth'])->name('admin.tools.create');
Route::post('/admin/tools', ['App\Http\Controllers\AdminToolsController', 'store'])->middleware(['auth']);
Route::get('/admin/tools', ['App\Http\Controllers\AdminToolsController', 'index'])->middleware(['auth'])->name('admin.tools.list');
Route::delete('/admin/tools/destroy/{tool}', ['App\Http\Controllers\AdminToolsController', 'destroy'])->middleware('auth')->name('admin.tools.destroy');

// auth
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
