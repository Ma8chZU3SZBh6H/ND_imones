<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
//Route::post('/', [HomeController::class, 'show'])->name('companies.search');

Route::post('/store', [CompaniesController::class, 'store'])->name('companies');
Route::delete('/delete/{company}', [CompaniesController::class, 'delete'])->name('companies.delete');

Route::get('/company/{company}', [CompanyController::class, 'show'])->name('company');
Route::post('/update/{company}', [CompanyController::class, 'store'])->name('company.update');