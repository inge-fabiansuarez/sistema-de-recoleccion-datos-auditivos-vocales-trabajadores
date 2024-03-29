<?php

use App\Http\Controllers\AudiometryController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedidasController;
use App\Http\Controllers\Users\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\Users\RoleController;
use App\Http\Controllers\VocalExamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('dashboard', [HomeController::class, 'home'])->name('dashboard');

    Route::get('billing', function () {
        return view('billing');
    })->name('billing');

    Route::get('profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('rtl', function () {
        return view('rtl');
    })->name('rtl');



    Route::get('tables', function () {
        return view('tables');
    })->name('tables');

    Route::get('virtual-reality', function () {
        return view('virtual-reality');
    })->name('virtual-reality');

    Route::get('static-sign-in', function () {
        return view('static-sign-in');
    })->name('sign-in');

    Route::get('static-sign-up', function () {
        return view('static-sign-up');
    })->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);

    Route::get('/login', function () {
        return view('dashboard');
    })->name('sign-up');

    Route::get('audiometry/create', [AudiometryController::class, 'create'])->name('audiometry.create');

    //USUARIOS
    Route::get('users/create', [RegisterController::class, 'create'])->name('user.create');
    Route::post('users/create', [RegisterController::class, 'store'])->name('user.store');
    Route::get('users', function () {
        return view('laravel-examples/user-management');
    })->name('user.index');
    Route::get('users/create', [RegisterController::class, 'create'])->name('user.create');
    Route::get('users/{user}/edit', [RegisterController::class, 'edit'])->name('user.edit');
    Route::post('users/{user}/edit', [RegisterController::class, 'update'])->name('user.update');
    Route::delete('users/{user}', [RegisterController::class, 'destroy'])->name('user.destroy');

    //ROLES
    Route::resource('roles', RoleController::class)->names('user.roles');
    Route::get('/user-profile', [InfoUserController::class, 'create'])->name('userprofil.index');
    Route::post('/user-profile', [InfoUserController::class, 'store'])->name('userprofil.store');

    //examenes vocales
    Route::get('/examen-vocal', [VocalExamController::class, 'index'])->name('vocalexams.index');

    //medidas
    Route::get('medidas/vocalpreventivas', [MedidasController::class, 'vocalPreventivas'])->name('vocalpreventivas');
    Route::get('medidas/vocalcorrectivas', [MedidasController::class, 'vocalCorrectivas'])->name('vocalcorrectivas');
    Route::get('medidas/auditivapreventivas', [MedidasController::class, 'auditivaPreventivas'])->name('auditivapreventivas');
    Route::get('medidas/auditivacorrectivas', [MedidasController::class, 'auditivaCorrectivas'])->name('auditivacorrectivas');
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
    Route::get('/login/forgot-password', [ResetController::class, 'create']);
    Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
    Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
    Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');
