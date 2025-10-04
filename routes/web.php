<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\databasecontroller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MemoryController;
use App\Http\Controllers\NotifyCOntroller;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Api\ApiController;
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
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register/store', [RegisterController::class, 'store'])->name('register.store');
// Route::get('/template', function () {
//     return view('layout.template');
// });
Route::prefix('admin')->group(function () {
    Route::get('/homepage', [LoginController::class, 'homepage'])->name('homepage');
    Route::get('/about', [LoginController::class, 'about'])->name('about');
    Route::get('/contact', [LoginController::class, 'contact'])->name('contact');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/response',[FormController::class, 'response'])->name('response');

    Route::get('/memory', [MemoryController::class, 'memory'])->name('admin.memory');
    Route::get('/memory/edit/{id}', [MemoryController::class, 'edit'])->name('memory.edit');
    Route::post('/memory/store', [MemoryController::class, 'store'])->name('memory.store');
    Route::get('/memory/{id}', [MemoryController::class, 'downloadAll'])->name('memory.downloadAll');
    Route::get('/memory/delete/{id}', [MemoryController::class, 'delete'])->name('memory.delete');


});
Route::prefix('response')->group(function () {
Route::get('/string',[FormController::class,'string'])->name('string');
Route::get('/redirect',[FormController::class,'redirect'])->name('redirect');
Route::get('/json',[FormController::class,'json'])->name('json');
Route::get('/custom',[FormController::class,'custom'])->name('custom');
Route::get('/view',[FormController::class,'view'])->name('view');
});

Route::post('/admin/check', [databasecontroller::class, 'check'])->name('admin.check');

Route::prefix('admin')->group(function () {
    Route::get('/members/count', [MemberController::class,'count'])->name('members.count');
    Route::get('/members/create', [MemberController::class, 'create'])->name('members.create');
    Route::get('/members', [MemberController::class, 'index'])->name('members.index');
    Route::post('/members', [MemberController::class, 'store'])->name('members.store');
    Route::get('/members/{id}/edit', [MemberController::class, 'edit'])->name('members.edit');
    Route::post('/members/{id}', [MemberController::class, 'update'])->name('members.update');
    Route::get('/members/{id}', [MemberController::class, 'delete'])->name('members.destroy');
});

Route::get('/notify', [NotifyCOntroller::class, 'index'])->name('index');
Route::post('/notify/send', [NotifyCOntroller::class, 'store'])->name('store');

Route::get('/message', [MessageController::class, 'index'])->name('message.index');
Route::post('/message/send', [MessageController::class, 'send'])->name('message.send');





