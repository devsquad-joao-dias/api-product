<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ProductController extends Controller
{
    public function index(Request $request): AnonymousResourceCollection
    {
        $limit = $request->get('limit', 10);
        $search = $request->get('search', null);
        $inRandomOrder = $request->get('randomOrder');
        $relationships = explode(',', $request->get('with', ''));

        $products = Product::query()
            ->when(in_array('category', $relationships), fn (Builder $query) => $query->with('category'))
            ->when($search, fn (Builder $query) => $query->search($search))
            ->when($inRandomOrder, fn (Builder $query) => $query->inRandomOrder())
            ->paginate($limit);

        return ProductResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function show(Product $product): ProductResource
    {
        return new ProductResource(
            $product->loadMissing('category')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
