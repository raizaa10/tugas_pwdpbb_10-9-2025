<?php 

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\ProductController; 

// Halaman utama
Route::get('/', function () { 
    return view('welcome'); 
}); 

// Resource route otomatis (index, create, store, show, edit, update, destroy)
Route::resource('products', ProductController::class);

// Route custom tambahan
Route::delete('/products', [ProductController::class, 'destroyAll'])
    ->name('products.destroyAll');
