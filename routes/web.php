<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí se registran las rutas de la aplicación.
|
*/

// Ruta de inicio
Route::get('/', function () {
    return view('welcome');
});

// Autenticación
Auth::routes();

// Dashboard (para usuarios autenticados)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Rutas protegidas solo para Pastores
Route::middleware(['auth', 'role:Pastor'])->group(function () {
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
});

// Rutas protegidas solo para Líderes
Route::middleware(['auth', 'role:Líder'])->group(function () {
    Route::get('/admin/eventos', function () {
        return view('eventos.index'); // Vista ficticia
    })->name('admin.eventos.index');
});

// Rutas protegidas solo para Miembros
Route::middleware(['auth', 'role:Miembro'])->group(function () {
    Route::get('/miembro/reportes', function () {
        return view('reportes.index'); // Vista ficticia
    })->name('miembro.reportes.index');
});


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login'); // Redirigir directamente a login después de salir
})->name('logout');
