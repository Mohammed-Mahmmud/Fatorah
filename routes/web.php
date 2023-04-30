<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\InvoicesDetailsController;
use App\Http\Controllers\InvoiceAttachmentsController;
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

Route::get('/', function () {
	return view('auth.login');

});

Auth::routes(['register' => false]);

Route::resource('invoices', InvoicesController::class);
Route::resource('sections', SectionsController::class);
Route::resource('products', ProductsController::class);

Route::get('/home', [HomeController::class, 'index']);
Route::get('/InvoicesDetails/{id}',[InvoicesDetailsController::class,'index']);
Route::get('/view_file/{invoice_number}/{file_name}',[InvoiceAttachmentsController::class, 'index']);
Route::get('/section/{id}',[InvoicesController::class,'getProducts']);
Route::get('/dashboard/{page}', [AdminController::class, 'index']);
