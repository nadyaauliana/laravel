<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CarakerjaPostController;
use App\Http\Controllers\LabersaController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\WahanaPostController;
use App\Models\CarakerjaPost;
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

Route::get('/', [CarakerjaPostController::class,'index'])->name('index');

Route::get('/',[LabersaController::class, 'index'])->name('index');

Route::get('/blogs', [BlogController::class,'index'])->name('blogs.index');

Route::get('/blogs/create', [BlogController::class,'create'])->name('blogs.create');
Route::post('/blogs', [BlogController::class,'store'])->name('blogs.store');

Route::get('/blogs/{id}/edit', [BlogController::class,'edit'])->name('blogs.edit');
Route::put('/blogs/{id}', [BlogController::class,'update'])->name('blogs.update');

Route::delete('/blogs/{id}', [BlogController::class,'destroy'])->name('blogs.destroy');

Route::get('/tentang',[LabersaController::class, 'viewTentang'])->name('tentang');

Route::get('/kontak',[LabersaController::class, 'viewKontak'])->name('kontak');

Route::get('/user/ticket/{order:invoice_number}', [LabersaController::class, 'viewDetailTicket'])->name('view-detail-ticket');

Route::post('/user/payment/callback', [PaymentController::class, 'handleCallback'])->name('payment.callback');

// Route::get('/login',[LoginController::class, 'index'])->name('login');