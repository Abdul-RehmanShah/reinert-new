<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRentalController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\FloorController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest'])->group(function () {  
    Route::get('/login', [LoginController::class, 'index'])->name('login'); 
    Route::post('/login-post', [LoginController::class, 'loginAction'])->name('login-post');
});

Route::middleware(['web', 'auth'])->group(function () { 

    Route::get('/home', [RentalController::class, 'index'])->name('rental');
    Route::get('/rental', [RentalController::class, 'index'])->name('rental');
    Route::get('/create-rental', [RentalController::class, 'createView'])->name('create-rental');
    Route::post('/rental-contract', [RentalController::class, 'stores'])->name('stores');

    Route::get('/kunden', [CustomerController::class, 'index'])->name('kunden');
    Route::get('/createcustomer', [CustomerController::class, 'createView'])->name('createcustomer');
    Route::post('/rental', [CustomerController::class, 'store'])->name('store');
    
    Route::get('/building', [BuildingController::class, 'index'])->name('building');
    Route::get('/createbuilding', [BuildingController::class, 'createView'])->name('createbuilding');
    Route::post('/addbuilding', [BuildingController::class, 'stored'])->name('stored');
    
    Route::get('/floor', [FloorController::class, 'index'])->name('floor');
    Route::get('/createfloor', [FloorController::class, 'createView'])->name('createfloor');
    Route::post('/addfloor', [FloorController::class, 'stor'])->name('stor');
    
    Route::get('/office', [OfficeController::class, 'index'])->name('office');
    Route::get('/createoffice', [OfficeController::class, 'createView'])->name('createoffice');
    Route::post('/addoffice', [OfficeController::class, 'stoor'])->name('stoor');
});

