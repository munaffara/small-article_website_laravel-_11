<?php

use App\Http\Controllers\admin\ArticleController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\AssignRoleToUserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Web\FrontEndController;
use Illuminate\Support\Facades\Route;



Route::get('/', [FrontEndController::class, 'showHomePage']);
Route::get('/article/{id}', [FrontEndController::class, 'showArticleDetails'])->name('article.details');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});

Route::resource('user', UserController::class);
Route::resource('role', RoleController::class);
Route::resource('assign-role-user', AssignRoleToUserController::class);
Route::resource('article', ArticleController::class);






