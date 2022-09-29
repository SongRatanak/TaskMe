<?php

use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\TodoList\HomeListController;
use App\Http\Controllers\TodoList\ImportantListController;
use App\Http\Controllers\TodoList\PersonalListController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/home', [HomeController::class, 'Home'])->name('Home');



//Route Home
Route::resource('Homelist',HomeListController::class);
Route::PUT('completed/{todoList}',[HomeListController::class, 'complete'])->name('complete.update');
Route::PUT('un/completed/{todoList}',[HomeListController::class, 'uncomplete'])->name('uncomplete.update');

//Rpute Important
Route::resource('ImportantList',\App\Http\Controllers\TodoList\ImportantListController::class);
Route::PUT('important/completed/{todoList}',[ImportantListController::class, 'personalcomplete'])->name('importantcomplete.update');
Route::PUT('important/un/completed/{todoList}',[ImportantListController::class, 'importantuncomplete'])->name('importantuncomplete.update');


//Route personal
Route::resource('PersonalList',PersonalListController::class);
Route::PUT('personal/complete/{todoList}',[PersonalListController::class, 'perosnalcomplete'])->name('perosnalcomplete.update');
Route::PUT('personal/un/completed/{todoList}',[PersonalListController::class, 'personaluncomplete'])->name('personaluncomplete.update');

//Route::resource('Home',HomeListController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
