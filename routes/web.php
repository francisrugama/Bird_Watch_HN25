<?php


use App\Http\Controllers\ProfileController;
use App\Livewire\Products\ProductList;
use Illuminate\Support\Facades\Route;

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

    //rutas con controlador y prefix


    //rutas de posts de tipo resource
    
});

require __DIR__ . '/auth.php';
