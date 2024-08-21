<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [UserController::class, 'index']);

Route::controller(SaleController::class)->group(function () {
    Route::get('/create-sale', 'create_sale')->name('sale.create');
    Route::post('/store-sale', 'store_sale')->name('sale.store');
    // Route::get('/edit-sale/{id}', 'edit_sale')->name('sale.edit')->middleware('can:editSale,id');
    Route::get('/edit-sale/{id}', 'edit_sale')->name('sale.edit')->can('editSale','id');
    Route::put('/update-sale/{id}', 'update_sale')->name('sale.update');
    Route::delete('/delete-sale/{id}', 'delete_sale')->name('sale.delete');
});


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');

    // users
    Route::get('users-list',[AdminController::class,'users_list'])->name('admin.users.list');
    
    // sales CRUD routes
    Route::get('sales-list',[AdminController::class,'sales_list'])->name('admin.sales.list');
    Route::get('sales-create',[AdminController::class,'sales_create'])->name('admin.sales.create');
    Route::post('sales-store',[AdminController::class,'sales_store'])->name('admin.sales.store');
    Route::get('sales-edit/{id}',[AdminController::class,'sales_edit'])->name('admin.sales.edit');
    Route::put('sales-update/{id}',[AdminController::class,'sales_update'])->name('admin.sales.update');
    Route::delete('sales-delete/{id}',[AdminController::class,'sales_delete'])->name('admin.sales.delete');

    // calculate sales 
    Route::get('salesperproduct', [AdminController::class, 'avg_sales_product']);
    Route::get('salesperperson', [AdminController::class, 'sales_per_person']);

    // graph
    Route::get('sales-graph', [PdfController::class, 'sales_graph'])->name('admin.graph');
    // pdf generate
    Route::get('pdf-generate',[PdfController::class,'pdf_generate'])->name('admin.pdf.generate');
    Route::get('pdf-view',[PdfController::class,'pdf_view'])->name('admin.pdf.view');
    Route::get('pdf-download',[PdfController::class,'pdf_download'])->name('admin.pdf.download');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// clear cache
Route::get('/clear', function() {
   
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('optimize');
 
    return "Cleared!";
 
 });
