<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoAppController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name("home.index");

Route::get('/todoapp', [TodoAppController::class, "index"])->name("todoapp.index");
Route::post('/todoapp', [TodoAppController::class, "store"])->name("todoapp.store");



// ["todoapp", "/todolist"]

Route::get('/blog', function () {
    return view('blog.index');
})->name("blog.index");
