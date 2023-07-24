<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\ProductForm;
use App\Http\Livewire\Products;
use App\Http\Livewire\ShowProduct;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/* Web Routes */
// https://www.youtube.com/watch?v=eUgbELQgzck&t=254s&ab_channel=TechnologyVillage

Route::get('/', function () {
    $payments = DB::table('payments')
        // ->join('orders', 'payments.payment_id' , "=" , 'orders.payment_id')
        // ->join('users', 'orders.user_id' , "=", 'users.id')
        // ->join('products', 'orders.product_id' , "=", 'products.product_id')

        // ->where('products.status', 1)
        // ->where('orders.status', 1)

        // ->get();
        ->leftjoin('orders', 'payments.payment_id', "=", 'orders.payment_id')
        ->leftjoin('users', 'orders.user_id', "=", 'users.id')
        ->leftjoin('products', 'orders.product_id', "=", 'products.product_id')

        ->where('products.status', 1)
        ->where('orders.status', 1)

            ->get();


    return view('welcome', compact('payments'));
});

/* post routes */
Route::resource('post', PostController::class);


/* livewire products */
Route::get('product', [ProductController::class, 'index']);
Route::get('product/create', [ProductController::class, 'create']);

Route::get('contact/form', [ProductController::class, 'contact_form']);
Route::get('/product/{id}', ShowProduct::class);