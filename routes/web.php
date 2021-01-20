<?php

use App\Models\Product;
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

Route::get('/', function () {

//    Cart::add('293ad', 'Product 1', 1, 9, ['size' => 'large'])->associate(Product::class);
//    Cart::add('293ae', 'Product 2', 2, 9, ['size' => 'large'])->associate(Product::class);


    return Cart::content();
//    foreach(Cart::content() as $row) {
//        echo 'You have ' . $row->qty . ' items of ' . $row->model->name . ' with description: "' . $row->model->description . '" in your cart.';
//    }


});

