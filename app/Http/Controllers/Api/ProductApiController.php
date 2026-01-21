<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductApiController extends Controller {
    public function index() {
        return response()->json(Product::with('category')->get());
    }

    public function show($id) {
        return response()->json(Product::with('category')->findOrFail($id));
    }
}
