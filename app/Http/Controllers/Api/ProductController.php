<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Product::all(),200);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        if (!is_numeric($id)) {
            return response()->json(['errors' => ['Product id is needed.']], JsonResponse::HTTP_BAD_REQUEST);
        }

        $product = Product::query()->where('id', '=', $id)->first();
        if (!$product) {
            return response()->json(['errors' => ['Product not found']], JsonResponse::HTTP_NOT_FOUND);
        }
        return response()->json($product, 200);
    }
}
