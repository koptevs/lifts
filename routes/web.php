<?php

use App\Http\Controllers\LiftController;
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

Route::resource('lifts', LiftController::class)->middleware(['auth','isAdmin']);

Route::post('/test', function (Illuminate\Http\Request $request) {
    dd(request('foo'));
})->name('test');

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


Route::controller(LiftManagerController::class)->group(function () {
    Route::prefix('lift-managers')->group(function () {
        Route::name('lift-managers.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->middleware('is_admin')->name('create');
            Route::post('/', 'store')->middleware('is_admin')->name('store');
            Route::get('/{liftManager}', 'show')->name('show');
            Route::get('/{liftManager}/edit', 'edit')->middleware('is_admin')->name('edit');
            Route::match(['put', 'patch'], '/{liftManager}', 'update')->middleware('is_admin')->name('update');
            Route::delete('/{liftManager}', 'destroy')->middleware('is_admin')->name('destroy');
        });
    });
});


require __DIR__.'/auth.php';
