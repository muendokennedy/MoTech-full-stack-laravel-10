<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
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

        $firstPath = $this->storeProductImage($request->file('firstImage'));
        $secondPath = $this->storeProductImage($request->file('secondImage'));
        $thirdPath = $this->storeProductImage($request->file('thirdImage'));
        $fourthPath = $this->storeProductImage($request->file('fourthImage'));

        $product = Product::create([
            'category' => $productData['category'],
            'name' => $productData['productName'],
            'initialPrice' => $productData['initialPrice'],
            'discountPrice' => $productData['discountPrice'],
            'firstImage' => $firstPath,
            'secondImage' => $secondPath,
            'thirdImage' => $thirdPath,
            'fourthImage' => $fourthPath,
            'specifications' => $productData['specifications'],
            'brandName' => $productData['brandName'],
            'productDescription' => $productData['productDescription']
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
    public function edit(Product $product)
    {
        //
        return view('admin.productedit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
        $product->update($request->except(['firstImageEdit','secondImageEdit','thirdImageEdit','fourthImageEdit']));

        $firstPath = $this->storeUpdatedProductImage($request->file('firstImageEdit'), $product->firstImage);
        $secondPath = $this->storeUpdatedProductImage($request->file('secondImageEdit'), $product->secondImage);
        $thirdPath = $this->storeUpdatedProductImage($request->file('thirdImageEdit'), $product->thirdImage);
        $fourthPath = $this->storeUpdatedProductImage($request->file('fourthImageEdit'), $product->fourthImage);

        $product->update(
            [
            'firstImage' => $firstPath,
            'secondImage' => $secondPath,
            'thirdImage' => $thirdPath,
            'fourthImage' => $fourthPath,
            ]
        );

        return redirect()->route('admin.products')->with('productUpdateSuccess', 'The product data has been updated successfully');
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

        $path = "products/$imageName.$imageExtension";

        Storage::disk('public')->put($path, $content);

        return $path;
    }

    private function storeUpdatedProductImage($productFile, $oldFile)
    {

        Storage::disk('public')->delete($oldFile);

        $imageExtension = $productFile->extension();

        $content = file_get_contents($productFile);

        $imageName = Str::random(25);

        $path = "products/$imageName.$imageExtension";

        Storage::disk('public')->put($path, $content);

        return $path;
    }

}
