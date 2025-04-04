<?php

use App\Models\Product;
use Hamcrest\Description;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
   
 
    // $product = new Product();
    // $product->title = 'Anor';
    // $product->description = 'delicios';
    // $product->price = 15000; 
    // $product->discount = '10'; 
    // $product->save();
    
    // return $product;


// Route::get('/products', [ProductController::class, 'index'])->name('products.index'  );
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
// Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
// Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::resource('products', ProductController::class)->names('products');

});


