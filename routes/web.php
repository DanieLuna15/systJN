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

// Dashboard (para todos los usuarios autenticados)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Grupo de rutas de administración
Route::middleware(['auth'])->prefix('admin')->group(function () {

    // Gestión de Usuarios (Solo para Pastores)
    Route::middleware(['role:Pastor'])->group(function () {
        Route::get('users', [UserController::class, 'index'])->name('admin.users.index'); // Listar usuarios
        Route::get('users/create', [UserController::class, 'create'])->name('admin.users.create'); // Formulario de creación
        Route::post('users', [UserController::class, 'store'])->name('admin.users.store'); // Guardar usuario
        Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit'); // Formulario de edición
        Route::put('users/{user}', [UserController::class, 'update'])->name('admin.users.update'); // Actualizar usuario
        Route::delete('users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy'); // Eliminar usuario
    });

    // Gestión de Eventos (Solo para Líderes)
    Route::middleware('role:Líder')->group(function () {
        Route::get('eventos', function () {
            return view('eventos.index'); // Vista ficticia
        })->name('admin.eventos.index');
    });

    // Gestión de Reportes (Acceso para Miembros)
    Route::middleware('role:Miembro')->group(function () {
        Route::get('reportes', function () {
            return view('reportes.index'); // Vista ficticia
        })->name('admin.reportes.index');
    });
});


// Logout (Redirección directa al login)
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
