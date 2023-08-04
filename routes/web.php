<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Import Excel File
Route::get('inser_file',[UserController::class,'inser_file'])->name('show_file');
Route::post('show_file',[UserController::class,'import'])->name('upload');

// For User Route
Route::get('users', [EmailController::class, 'index'])->name('users.index');
Route::get('email',[EmailController::class,'send_email'])->name('send_mail');
Route::get('send_emails',[EmailController::class,'send_email'])->name('send_email');
Route::post('send_email',[EmailController::class,'send_content'])->name('send_content');

// For CRUD Opration
Route::get('send_email/{id}',[UserController::class,'edit_email'])->name('edit_email');
Route::post('send_email/{id}',[UserController::class,'update_email'])->name('update_email');
Route::get('delete_email/{id}',[UserController::class,'delete_email'])->name('delete_email');
Route::get('add_user',[UserController::class,'email_form'])->name('email_form');
Route::post('add_user',[UserController::class,'add_user'])->name('add_users');
