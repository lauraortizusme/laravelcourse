<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductTestApiController extends Controller
{
    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
        ]);

        return response()->json([
            'message' => 'Test product created',
            'data' => $product
        ]);
    }
}