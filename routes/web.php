<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AddAdminController;
use App\Http\Controllers\PurchaseListController;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\AddMovieController;
use App\Http\Controllers\AddGenreController;
use App\Http\Controllers\EditMovieController;
use App\Http\Controllers\RevenueController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\AdminMovieListController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SearchController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/subscribe', [SignupController::class, 'index'])->name('signup');
Route::post('/subscribe', [SignupController::class, 'createAccount']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LogoutController::class, 'logUserOut'])->name('logout');

Route::get('/categories', [GenreController::class, 'index'])->name('genres');

Route::get('/categories/{id}', [GenreController::class, 'genreView'])->name('genreView');

Route::get('product/{id}', [MovieController::class, 'index'])->name('movieView');

Route::post('/search', [SearchController::class, 'search'])->name('search');

Route::middleware(['auth', 'user-access:client'])->group(function() {
    Route::get('/purchase-list/{id}', [PurchaseListController::class, 'index'])->name('purchaseList');

    Route::get('/edit-profile/{id}', [SettingsController::class, 'index'])->name('settings');
    Route::post('/edit-profile/{id}', [SettingsController::class, 'editProfile']);

    Route::post('/purchase/{id}', [PurchaseController::class, 'purchase'])->name('purchase');
});

Route::middleware(['auth', 'user-access:admin'])->group(function() {
    
    Route::get('/admin/add-admin', [AddAdminController::class, 'index'])->name('addAdmin');
    Route::post('/admin/add-admin', [AddAdminController::class, 'addAdmin']);

    Route::get('/admin/users-list', [UserListController::class, 'index'])->name('usersList');
    Route::post('/admin/filter-users-list', [UserListController::class, 'filter'])->name('filterUsers');

    Route::get('/admin/add-product', [AddMovieController::class, 'index'])->name('addMovie');
    Route::post('/admin/add-product', [AddMovieController::class, 'addMovie']);

    Route::get('/admin/add-category', [AddGenreController::class, 'index'])->name('addGenre');
    Route::post('/admin/add-category', [AddGenreController::class, 'addGenre']);

    Route::post('/admin/change-add', [AddGenreController::class, 'changeAdd'])->name('changeAdd');

    Route::get('/admin/edit-product/{id}', [EditMovieController::class, 'index'])->name('editMovie');
    Route::post('/admin/edit-product/{id}', [EditMovieController::class, 'editMovie']);
    Route::post('/admin/delete-product-image/{id}', [EditMovieController::class, 'deleteImage'])->name('deleteImage');

    Route::get('/admin/revenue', [RevenueController::class, 'index'])->name('revenue');
    Route::post('/admin/revenue', [RevenueController::class, 'addBatch']);

    Route::post('/admin/delete/{id}', [DeleteController::class, 'deleteMovie'])->name('deleteMovie');

    Route::get('/admin/movie-list', [AdminMovieListController::class, 'index'])->name('adminMovieList');
    
    Route::post('/admin/filter-movie-list', [AdminMovieListController::class, 'filter'])->name('filterMovieList');

});

