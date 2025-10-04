<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/api', [ApiController::class, 'index'])->name('api.index');
Route::get('/api/all', [ApiController::class, 'alluser'])->name('alluser');
Route::get('/api/{id}', [ApiController::class, 'show'])->name('api.show');
Route::post('/api', [ApiController::class, 'store'])->name('api.store');
Route::get('/api/{id}/edit', [ApiController::class, 'edit'])->name('api.edit');
Route::put('/api/{id}', [ApiController::class, 'update'])->name('api.update');
Route::delete('/api/{id}', [ApiController::class, 'destroy'])->name('api.destroy');
