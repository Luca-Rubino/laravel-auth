<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ChiSiamoController;
use App\Http\Controllers\ExerciceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContattiController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
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

Route::get('/',[IndexController::class,'index'])->name('Home');

Route::get('/Chi_siamo',[ChiSiamoController::class,'index'])->name('Chi_Siamo');
Route::get('/Exercise',[ExerciceController::class,'index'])->name('Exercise');
Route::get('/Blog',[BlogController::class,'index'])->name('Blog');
Route::get('/Contatti',[ContattiController::class,'index'])->name('Contatti');

Route::middleware('auth')->name('admin.')->prefix('admin/')->group(function(){

    Route::resource("/projects", AdminProjectController::class);
}
);