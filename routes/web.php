<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;

Route::get('/summary', function () {
    return view('summary.summary');
})->name('summary');

Route::get('/', function () {
    return view('summary.summary2');
})->name('home');

Route::get('/contact', function () {
    return view('contact.contact');
})->name('contact');


Route::get('/contact/all', [ContactController::class, 'allData'])->name('contact-all');
Route::get('/contact/{id}', [ContactController::class, 'moreData'])->name('contact-more');
Route::get('/contact/{id}/edit', [ContactController::class, 'editFormData'])->name('contact-form-edit');
Route::get('/contact/{id}/delete', [ContactController::class, 'deleteData'])->name('contact-delete');


Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-form');
Route::post('/contact/{id}/edit', [ContactController::class, 'editData'])->name('contact-edit');

Route::post('/todo', [TodoController::class, 'submit'])->name('todo-add');

Route::get('/todo', [TodoController::class, 'show'])->name('todo');
Route::get('/todo/{id}', [TodoController::class, 'info'])->name('todo-info');
Route::get('/todo/{id}/success', [TodoController::class, 'success'])->name('todo-success');
