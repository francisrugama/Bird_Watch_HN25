<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Historial_detailController;
use App\Http\Controllers\Tour_categorieController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\Auth\SocialController;


Route::get('/', function () {
    return view('welcome');
})->name('home');


        Route::get('auth/google', [SocialController::class, 'redirectToProvider'])->name('login.google');
        Route::get('auth/google/callback', [SocialController::class, 'handleProviderCallback']);
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    Route::prefix('/ejemplo')->group(function () {
        Route::get('/index', fn () => view('examples.ejemplo.index'))->name('ejemplo.index');
        Route::get('/create', fn () => view('examples.ejemplo.create'))->name('ejemplo.create');
        Route::get('/edit', fn () => view('examples.ejemplo.edit'))->name('ejemplo.edit');
        Route::get('/show', fn () => view('examples.ejemplo.show'))->name('ejemplo.show');
    });

    Route::resource('visitors', VisitorController::class);
    Route::resource('hotels', HotelController::class);
    Route::resource('guides', GuideController::class);
    Route::resource('places', PlaceController::class);
    Route::resource('admins', AdminController::class)->parameters([
    'admins' => 'id'
]);
    Route::resource('tours', TourController::class);
    Route::resource('tours_categories', Tour_categorieController::class);
    Route::resource('reservations', ReservationController::class);
    Route::resource('historial_details', Historial_detailController::class);
    Route::resource('catalogs', CatalogController::class);

});

require __DIR__ . '/auth.php';

