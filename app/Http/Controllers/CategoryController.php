<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CategoryController extends Controller
{
    public function index(IndexRequest $request): AnonymousResourceCollection
    {
        $limit = $request->get('limit', 10);
        $inRandomOrder = $request->get('randomOrder');

        $categories = Category::query()
            ->when($inRandomOrder, fn (Builder $query) => $query->inRandomOrder())
            ->paginate($limit);

        return CategoryResource::collection($categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
