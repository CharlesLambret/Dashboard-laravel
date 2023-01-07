<?php

use App\Http\Controllers\ProfileController;
use \App\Http\Controllers\ProjectController;
use \App\Http\Controllers\ClientController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function() {
    Route::get('/project', [ProjectController::class, 'index'])->name('project.index');


    Route::get('/client', [ClientController::class, 'index'])->name('client.index');
    Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
    Route::post('/client', [ClientController::class, 'store'])->name('client.store');
    Route::get('/projets', [ProjectController::class, 'index'])->name('project.index');
    Route::post('/projets', [ProjectController::class, 'store'])->name('project.store');
    Route::put('/projets/{id}', [\App\Http\Controllers\ProjectController::class, 'update'])->name('projets.update');
    Route::delete('/projets/{id}', [\App\Http\Controllers\ProjectController::class, 'delete'])->name('projets.delete');
    Route::get('/projets/{id}/edit', [\App\Http\Controllers\ProjectController::class, 'edit'])->name('projets.edit');
    Route::get('/projets/create', [ProjectController::class, 'create'])->name('project.create');
}
);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
