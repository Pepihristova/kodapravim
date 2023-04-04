<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::resource('types', 'Types');
Route::get('/types', [App\Http\Controllers\TypesController::class, 'index'])->name('types');
Route::get('types/create', [App\Http\Controllers\TypesController::class, 'create']);
Route::post('/types',[App\Http\Controllers\TypesController::class, 'store'])->name('types.store');
Route::put('types/update',[App\Http\Controllers\TypesController::class, 'update'])->name('types.update');
Route::get('types/edit', [App\Http\Controllers\TypesController::class, 'edit'])->name('types.edit');
Route::delete('/types/{id}',[App\Http\Controllers\TypesController::class, 'destroy'])->name('types.destroy');
//Route::resource('second_places', App\Http\Controllers\SecondPlacesController::class);
Route::get('/second_places', [App\Http\Controllers\SecondPlacesController::class, 'index'])->name('second_places.index');
Route::get('second_places/create', [App\Http\Controllers\SecondPlacesController::class, 'create']);
Route::post('/second_places',[App\Http\Controllers\SecondPlacesController::class, 'store'])->name('second_places.store');
Route::put('second_places/update',[App\Http\Controllers\SecondPlacesController::class, 'update'])->name('second_places.update');
Route::get('second_places/edit', [App\Http\Controllers\SecondPlacesController::class, 'edit'])->name('second_places.edit');
Route::delete('/second_places/{id}',[App\Http\Controllers\SecondPlacesController::class, 'destroy'])->name('second_places.destroy');
//Route::get('/second_places', [App\Http\Controllers\SecondPlacesController::class, 'index'])->name('second_places');
Route::get('/activities', [App\Http\Controllers\ActivitiesController::class, 'index'])->name('activities');
Route::get('activities/create', [App\Http\Controllers\ActivitiesController::class, 'create']);
Route::post('/activities',[App\Http\Controllers\ActivitiesController::class, 'store'])->name('activities.store');
Route::put('activities/update',[App\Http\Controllers\ActivitiesController::class, 'update'])->name('activities.update');
Route::get('activities/edit', [App\Http\Controllers\ActivitiesController::class, 'edit'])->name('activities.edit');
Route::delete('/activities/{id}',[App\Http\Controllers\ActivitiesController::class, 'destroy'])->name('activities.destroy');
//all tables controller
//Route::resource('bigtables', BigTablesController::class);
Route::get('/bigtables', [App\Http\Controllers\BigTablesController::class, 'index'])->name('bigtables');
Route::get('bigtables/create', [App\Http\Controllers\BigTablesController::class, 'create']);
Route::post('/bigtables',[App\Http\Controllers\BigTablesController::class, 'store'])->name('bigtables.store');
Route::put('bigtables/update',[App\Http\Controllers\BigTablesController::class, 'update'])->name('bigtables.update');
Route::get('bigtables/edit', [App\Http\Controllers\BigTablesController::class, 'edit'])->name('bigtables.edit');
Route::delete('/bigtables/{id}',[App\Http\Controllers\BigTablesController::class, 'destroy'])->name('bigtables.destroy');
// results

Route::get('/results/places', [App\Http\Controllers\PlacesChoiceController::class, 'index'])->name('results.places');
Route::get('/results/second_places', [App\Http\Controllers\SecondPlacesChoiceController::class, 'index'])->name('results.second_places');
Route::get('/results/types', [App\Http\Controllers\TypeChoiceController::class, 'index'])->name('results.types');
Route::get('/results/activities', [App\Http\Controllers\ActivitiesChoiceController::class, 'index'])->name('results.activities');
Route::get('/results/endresult', [App\Http\Controllers\EndResultController::class, 'index'])->name('results.endresult');