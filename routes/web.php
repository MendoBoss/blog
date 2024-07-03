<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    // return view('dashboard');
    return redirect()->action([BlogController::class,'show']);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('posts/{post}',[BlogController::class,'store'])->middleware('auth')->name('store');

Route::get('/post',[BlogController::class,'show'])->name('posts.show');
Route::get('/post/{id}',[BlogController::class,'showOne'])->name('showOne');
Route::get('/create',[BlogController::class,'create'])->name('create.post');

require __DIR__.'/auth.php';
