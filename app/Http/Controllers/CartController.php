<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {

        return 'supto';
//        foreach(Cart::content() as $row) {
//            return 'You have ' . $row->qty . ' items of ' . $row->model->name . ' with description: "' . $row->model->description . '" in your cart.';
//        }
//        return Cart::content();
    }

    public function addToCart(Request $request)
    {
        return \Cart::add([
            'id' => $request->get('id'),
            'name' => $request->get('title'),
            'qty' => 1, 'price' => $request->get('price'),
            'options' => ['size' => 'large']
        ])->associate(Product::class);
    }
}
