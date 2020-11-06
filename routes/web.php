<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/all-customer', [ClientController::class, 'AllClient']);

Route::post('update-ticket', [TicketController::class, 'UpdateTicket']);
Route::get('/open-ticket', [TicketController::class, 'AllTicket']);
Route::get('/ticket-details/{id}', [TicketController::class, 'TicketDetail'])->name("updateTicket");

Route::get('/faq', [FaqsController::class, 'index']);
Route::post('/create-faq', [FaqsController::class, 'CreateFaq']);

Route::get('/all-product', [ProductController::class, 'AllProduct']);
Route::post('/save-product', [ProductController::class, 'SaveProduct']);
Route::get('/add-product', [ProductController::class, 'AddProduct'])->name("AddProduct");


