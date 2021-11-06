<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::view('/about','about')->name('about');
Route::view('/blog','blog')->name('blog');
Route::view('/contact','contact')->name('contact');
Route::view('/doctors','doctors')->name('doctors');

Auth::routes(['verify'=>true]);

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::post('/appointment', [App\Http\Controllers\WelcomeController::class, 'appointment'])->name('appointment');
Route::get('/cancel_appoint/{id}', [App\Http\Controllers\WelcomeController::class, 'cancelAppoint'])->name('cancel_appoint');
Route::get('/myappointment', [App\Http\Controllers\WelcomeController::class, 'myappointment'])->name('myappointment');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'redirect'])->name('home')->
middleware(['verified']);
Route::get('/add_doctor', [App\Http\Controllers\AdminController::class, 'addview'])->name('addDoctor');
Route::post('/upload_doctor', [App\Http\Controllers\AdminController::class, 'upload'])->name('uploadDoctor');
Route::get('/showappointsments', [App\Http\Controllers\AdminController::class, 'showAppoints'])->name('showappointsments');
Route::get('/approve/{id}', [App\Http\Controllers\AdminController::class, 'approve'])->name('approve');
Route::get('/cancel/{id}', [App\Http\Controllers\AdminController::class, 'cancel'])->name('cancel');
Route::get('/showdoctors', [App\Http\Controllers\AdminController::class, 'showdoctors'])->name('showdoctors');
Route::get('/deletedoc/{id}', [App\Http\Controllers\AdminController::class, 'deletedoc'])->name('deletedoc');
Route::get('/editdoc/{id}', [App\Http\Controllers\AdminController::class, 'editdoc'])->name('editdoc');
Route::post('/updatedoc/{id}', [App\Http\Controllers\AdminController::class, 'updatedoc'])->name('updatedoc');
Route::get('/emailview/{id}', [App\Http\Controllers\AdminController::class, 'emailview'])->name('emailview');
Route::post('/sendmail/{id}', [App\Http\Controllers\AdminController::class, 'sendmail'])->name('sendmail');


