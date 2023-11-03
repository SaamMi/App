<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Filter;
use App\Livewire\TdList;

use App\Livewire\CreatePost;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/home', [Filter::class, 'render']);


Route::get('/hello', [CreatePost::class, 'render'] );

Route::get('/todo', [TdList::class, 'render'] );




