<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Store a newly created product in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $productData = $request->validated();

        $firstPath = $this->storeProductImage($productData->file('firstImage'));
        $secondPath = $this->storeProductImage($productData->file('secondImage'));
        $thirdPath = $this->storeProductImage($productData->file('thirdImage'));
        $fourthPath = $this->storeProductImage($productData->file('fourthImage'));

        $product = Product::create([
            'category' => $productData->category,
            'name' => $productData->productName,
            'initialPrice' => $productData->initialPrice,
            'discountPrice' => $productData->discountPrice,
            'firstImage' => $firstPath,
            'secondImage' => $secondPath,
            'thirdImage' => $thirdPath,
            'fourthImage' => $fourthPath,
            'specifications' => $productData->specifications,
            'brandName' => $productData->brandName,
            'productDescription' => $productData->productDescription
        ]);

        return redirect()->route('admin.products')->with('productSuccess', 'The product has been added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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

    private function storeProductImage($productFile)
    {
        $imageExtension = $productFile->extension();

        $content = file_get_contents($productFile);

        $imageName = Str::random(25);

        $path = "products/$imageName.$imageExtension ";

        Storage::disk('public')->put($path, $content);

        return $path;
    }

}
