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
use App\Http\Controllers\HistorialDetailController;
use App\Http\Controllers\TourCategoryController;

Route::get('/', function () {
    return view('welcome');
});

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

    //rutas de ejemplo sin controlador con prefijo
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
    Route::resource('admins', AdminController::class);
    Route::resource('tours', TourController::class);
    Route::resource('tour_categories', TourCategoryController::class);
    Route::resource('reservations', ReservationController::class);
     Route::resource('historial_details', HistorialDetailController::class);


    //rutas con controlador y prefix


    //rutas de posts de tipo resource

});

require __DIR__ . '/auth.php';

