<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
     public function add(Request $request)
    {
        // $request->session()->push('cart', $request->book_id);
        return back()->with('success', 'Book added to cart!');
    }
}
