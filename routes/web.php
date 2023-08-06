<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerGroupController;
use App\Http\Controllers\CustomerNoteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskPriorityController;
use App\Http\Controllers\TaskStatusController;
use Illuminate\Support\Facades\Route;

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
    return redirect('/dashboard');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');;

    Route::get('/settings', function () {
        return view('settings');
    })->name('settings');


    Route::resource('/customers', CustomerController::class);
    Route::resource('/customergroups', CustomerGroupController::class);
    Route::resource('/customernotes', CustomerNoteController::class);

    Route::resource('/projects', ProjectController::class);

    Route::resource('/tasks', TaskController::class);
    Route::resource('/taskstatuses', TaskStatusController::class);
    Route::resource('/taskpriorities', TaskPriorityController::class);


});
