<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Recent\Recents;
use App\Http\Livewire\Posts\Posts;
use App\Http\Livewire\Category\Categories;




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

// Route::get('/', function () {
//     return view('create');
// });

// Route::get('/', [Create::class, 'render']);
// Route::get('/posts', [Posts::class, 'render']);
// Route::get('/categories', [Categories::class, 'render']);


Route::get('/', [Recents::class,'index']);
Route::get('/posts', [Posts::class,'index']);
Route::get('/categories', [Categories::class,'index']);





// Route::get('/', function () {
//     return view('create');
// });

// Route::get('/posts', function() {
//     return view('posts');
// });

// Route::get('/categories', function() {
//     return view('category');
// });






