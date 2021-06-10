<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json([Category::all()], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\CategoryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CategoryRequest $request)
    {
        try {
            $category = Category::create($request->all());
            return response()->json($category, JsonResponse::HTTP_CREATED);
        } catch (\Throwable $e) {
            return response()->json(
                ['data' => 'Sorry! Please contact the administrator.'],
                JsonResponse::HTTP_INTERNAL_SERVER_ERROR
            );
        }
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
            return $this->getErrorResponseIdNeed();
        }

        $category = Category::query()->where('id', '=', $id)->first();
        if (!$category) {
            return $this->getErrorResponseNotFound();
        }
        return response()->json($category, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\CategoryRequest $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CategoryRequest $request, $id)
    {
        if (!is_numeric($id)) {
            return $this->getErrorResponseIdNeed();
        }

        $category = Category::query()->where('id', '=', $id)->first();
        if (!$category) {
            return $this->getErrorResponseNotFound();
        }

        $category->fill($request->all());
        $category->save();
        return response()->json($category, JsonResponse::HTTP_ALREADY_REPORTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        if (!is_numeric($id)) {
            return $this->getErrorResponseIdNeed();
        }

        $category = Category::query()->where('id', '=', $id)->first();
        if (!$category) {
            return $this->getErrorResponseNotFound();
        }

        $category->delete();
        return response()->json(['success' => 'Successfully deleted.'], JsonResponse::HTTP_OK);
    }

    private function getErrorResponseIdNeed(): \Illuminate\Http\JsonResponse
    {
        return response()->json(['errors' => ['Category id is needed.']], JsonResponse::HTTP_BAD_REQUEST);
    }

    private function getErrorResponseNotFound(): \Illuminate\Http\JsonResponse
    {
        return response()->json(['errors' => ['Category not found']], JsonResponse::HTTP_NOT_FOUND);
    }
}
