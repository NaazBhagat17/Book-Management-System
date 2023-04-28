<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\Controller;

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
Route::group(['middleware'=>"auth"],function(){
    Route::get('/cms',[CmsController::class, 'index']);
    Route::get('/editcms/{id}',[CmsController::class, 'edit']);
Route::put('/editcms/{id}',[CmsController::class, 'update']);

Route::get('/store',[StoreController::class, 'index']);


Route::post('/regstore',[StoreController::class, 'insert'])->name('insert');
Route::get('/edit/{id}',[StoreController::class, 'edit'])->name('edit');
Route::put('/edit/{id}',[StoreController::class, 'update'])->name('update');
Route::get('/delete/{id}',[StoreController::class, 'destroy'])->name('destroy');




Route::get('/regauthor',[AuthorController::class, 'index']);

Route::post('/addauthor',[AuthorController::class, 'register']);


Route::post('/regauthor',[AuthorController::class, 'save'])->name('addimage');

Route::get('/editau/{id}',[AuthorController::class, 'edit'])->name('edit');

Route::put('/editau/{id}',[AuthorController::class, 'update'])->name('update');
Route::get('/deleteau/{id}',[AuthorController::class, 'destroy'])->name('destroy');

// Route::get('/admin', function () {
//     return view('admin.dashboard');
// });

Route::get('/regbook', function () {
    return view('books');
});
// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// });
Route::get('/addbook',[BookController::class, 'addbook']);
Route::post('/regbook',[BookController::class, 'save'])->name('addimage');
Route::get('/regbook',[BookController::class, 'index']);


Route::put('/editbook/{id}',[BookController::class, 'update'])->name('update');
Route::get('/editbook/{id}',[BookController::class, 'edit'])->name('edit');
Route::get('/deletebo/{id}',[BookController::class, 'destroy'])->name('destroy');
Route::get('/addauthor', function () {
    return view('addauthor');
});
Route::get('/addstore', function () {
    return view('addstore');
});

});
// Route::get('/regbook',[HomeController::class, 'filter']);




Auth::routes();

Route::get('/about','App\Http\Controllers\CmsController@about');
Route::get('/contactus','App\Http\Controllers\CmsController@contact');
Route::resource('/contact',ContactController::class);
// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });

//Route::get('/viewau/{id}',[HomeController::class, 'view'])->name("view");

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/genre', [App\Http\Controllers\GenreController::class, 'index']);
Route::get('/view/{id}',[StoreController::class, 'view'])->name("view");
Route::get('/viewbook/{id}',[BookController::class, 'view'])->name("view");
Route::get('/viewau/{id}',[AuthorController::class, 'view'])->name("view");
Route::get('/bookli',[BookController::class, 'listing'])->name("view");
Route::get('/authorli',[AuthorController::class, 'listing'])->name("view");
Route::get('/storeli',[StoreController::class, 'listing'])->name("view");