<?php

use App\Http\Controllers\EmployeeController;
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

Route::get('/', [EmployeeController::class, 'showEmployees']);
Route::get('/pdf', [EmployeeController::class, 'export_pdf']);
Route::get('/invoice', [EmployeeController::class, 'index']);
Route::get('/invoice/pdf', [EmployeeController::class, 'pdf_download']);

