<?php

use App\Http\Controllers\Front\FrontController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(['register' => false]);

Route::group(['middleware' => 'maintenance', 'namespace' => 'Front'], function () {
    Route::get('/', [FrontController::class,'home'])->name('home');

    Route::get('about', [FrontController::class,'about'])->name('about');
    Route::get('projects', [FrontController::class,'projects'])->name('projects');
    Route::get('faqs', [FrontController::class,'faqs'])->name('faqs');
    Route::get('articles', [FrontController::class,'articles'])->name('articles');
    Route::get('articles/{id}', [FrontController::class,'article'])->name('article');

    Route::get('/contact', [FrontController::class,'contact'])->name('contact');
    Route::post('/add-contact', [FrontController::class,'addContact'])->name('addContact');
});

Route::get('maintenance', function () {
    if (setting()->status === 'open') {
        return redirect('/');
    }
    return view('front/maintenance');
});
