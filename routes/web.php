<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\Auth\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/event', [EventController::class, 'createEvent'])->name('admin.event.create');
    Route::get('/admin/dashboard/event', [EventController::class, 'storeEvent'])->name('admin.event.store');
    Route::get('/admin/dashboard/events', [EventController::class, 'index'])->name('admin.events.list');
    Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('admin.event.destroy');;
});
Route::get('/', [UserController::class, 'index'])->name('user.dashboard');
Route::get('/about-us', [UserController::class, 'aboutUs'])->name('user.about');
Route::get('events/', [UserController::class, 'showEvents'])->name('user.events');


Route::middleware(['auth', 'role:user'])->group(function () {
    // Route::get('/', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/events/{event}', [EventController::class, 'show'])->name('event.details');
    Route::get('/tickets/{ticket}', [TicketController::class, 'purchase'])->name('ticket.purchase');
    Route::get('/reserve', [TicketController::class, 'reserve'])->name('reserve.ticket');
    Route::post('/events/{event}/reservations', [ReservationController::class, 'store'])->name('reservations.store');
});