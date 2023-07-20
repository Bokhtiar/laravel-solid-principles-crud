<?php

use App\Http\Controllers\PostController;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/* Web Routes */
Route::get('/', function () {
    $payments = DB::table('payments')
                ->join('orders', 'payments.payment_id' , "=" , 'orders.payment_id')
                ->join('users', 'orders.user_id' , "=", 'users.id')
                ->join('products', 'orders.product_id' , "=", 'products.product_id')
                   
                ->where('products.status', 1)
                ->where('orders.status', 1)
                ->where('payments.txid' , "=" , 0)
                ->get();

    return view('welcome', compact('payments'));
});

/* post routes */
Route::resource('post', PostController::class);