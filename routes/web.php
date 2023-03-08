<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'] )->name('home');
//
Route::get('news/{news}', [\App\Http\Controllers\HomeController::class, 'show'] )->name('news');
//
Route::get('/register/login', [\App\Http\Controllers\LoginController::class, 'show'] )->name('register.login');
//
Route::get('/login', [LoginController::class, 'index'])->name('login');
//
Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
//
Route::get('/admin/users', [\App\Http\Controllers\AdminUserController::class, 'index'] )->name('admin.users');
//
Route::get('/admin/user/create', [\App\Http\Controllers\AdminUserController::class, 'create'] )->name('admin.user.create');


//Rota para deletar um usuario no banco de dados
Route::get('/admin/users/{user}/delete', [\App\Http\Controllers\AdminUserController::class, 'destroy'] )->name('admin.user.destroy');


//Rota para criação de um novo usuário
Route::post('/users', [\App\Http\Controllers\UserController::class, 'store'] )->name('user.store');


//Rota para adiciconar usuários
Route::post('/users.add', [\App\Http\Controllers\UserController::class, 'add'] )->name('user.add');


//Rotas para edição de usuarios
Route::get('/admin/users/{user}/edit', [\App\Http\Controllers\AdminUserController::class, 'edit'] )->name('admin.user.edit');
Route::put('/admin/users/{user}', [\App\Http\Controllers\AdminUserController::class, 'update'])->name('admin.user.update');


//Rotas para noticcicas
Route::get('/admin/mynews', [\App\Http\Controllers\NewsController::class, 'news'] )->name('admin.mynews');
Route::get('/admin/news/create', [\App\Http\Controllers\NewsController::class, 'create_news'] )->name('admin.news.create');
Route::get('/admin/mynews/{news}/edit', [\App\Http\Controllers\AdminNewsController::class, 'edit_news'] )->name('admin.mynews.edit');
Route::put('/admin/mynews/{news}', [\App\Http\Controllers\AdminNewsController::class, 'update'] )->name('admin.mynews.update');


//Rota para criação de noticias news
Route::post('/admin/news/', [\App\Http\Controllers\AdminNewsController::class, 'store'] )->name('admin.news.store');
Route::get('/admin/mynews/{news}/delete', [\App\Http\Controllers\AdminNewsController::class, 'destroy'] )->name('admin.mynews.destroy');
Route::get('/admin/mynews/{news}/delete-image', [\App\Http\Controllers\AdminNewsController::class, 'destroyImage'] )->name('admin.mynews.destroyImage');







