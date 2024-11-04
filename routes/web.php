<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ServiceController;
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

Route::get('/companies', [CompanyController::class, 'index'])->name('company.index');

// Rute untuk menampilkan formulir pembuatan perusahaan
Route::get('/companies/create', [CompanyController::class, 'create'])->name('company.create');

// Rute untuk menyimpan perusahaan baru
Route::post('/companies', [CompanyController::class, 'store'])->name('company.store');

// Rute untuk menampilkan halaman edit perusahaan
Route::get('/companies/{id}/edit', [CompanyController::class, 'edit'])->name('company.edit');

// Rute untuk memperbarui perusahaan
Route::put('/companies/{id}', [CompanyController::class, 'update'])->name('company.update');


// Rute untuk menampilkan profil perusahaan
Route::get('/company/{id}', [CompanyController::class, 'show'])->name('company.show');

// Route::resource('companies', CompanyController::class);
Route::resource('companies.employees', EmployeeController::class);
Route::resource('companies.services', ServiceController::class);