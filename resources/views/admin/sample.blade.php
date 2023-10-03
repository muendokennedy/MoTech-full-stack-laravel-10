                <div class="edit-product bg-white p-4 rounded-md my-4 absolute z-50 top-10 left-24 sm:left-32 lg:left-40 w-3/4 md:w-4/5">
                    <div class="close flex justify-end px-3"><i class="fa-solid fa-times text-2xl p-2 cursor-pointer"></i></div>
                    <h2 class="text-[rgb(4,46,255)] text-base md:text-xl font-semibold py-4 capitalize">edit this product</h2>
                    <div class="edit-product-form">
                        <form action="{{route('product.update', $product)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row w-full flex flex-col md:flex-row justify-between">
                            <div class="input-box md:basis-[48%]">
                            <label for="category" class="block py-3">Select Category:</label>
                            <select name="category" id="category" class="@error('category') border-red-500 @enderror border-2 outline-none rounded-md px-4 py-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                                @if (!old('category'))
                                <option value="None" selected disabled hidden>Select a category</option>
                                @endif
                                @foreach ($productCategory as $category)
                                    <option value="{{ $category }}" @selected(old('category') || $product->category == $category)>{{ $category }}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="input-box md:basis-[48%]">
                            <label for="productName" class="block py-3">Enter Product name:</label>
                            <input type="text" name="productName" id="productName" value="{{old('productName') ?? $product->name}}" class="@error('productName') border-red-500 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                            @error('productName')
                                <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                            @enderror
                            </div>
                        </div>
                        <div class="form-row w-full flex flex-col md:flex-row justify-between">
                            <div class="input-box md:basis-[48%]">
                                <label for="initialPrice" class="block py-3">Enter the initial price:</label>
                                <input type="number" name="initialPrice" id="initialPrice" value="{{old('initialPrice') ?? $product->initialPrice}}" class="@error('initialPrice') border-red-600 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                                @error('initialPrice')
                                <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-box md:basis-[48%]">
                            <label for="discountPrice" class="block py-3">Enter the discounted price:</label>
                            <input type="number" name="discountPrice" id="discountPrice" value="{{old('discountPrice') ?? $product->discountPrice }}" class="@error('discountPrice') border-red-600 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                            @error('discountPrice')
                            <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                            @enderror
                            </div>
                        </div>`
                        <p class="capitalize mt-4">Select product images (Start with the primary image):</p>
                        <div class="form-row w-full flex flex-col md:flex-row gap-2 justify-between my-4">
                            <div class="md:basis-[23%]">
                                <div class="@error('firstImage') border-red-600 @enderror input-box1-edit file-box flex items-center justify-center flex-col  border-dashed border-2 border-[#042EFF]">
                                <div class="original-info1-edit flex items-center justify-center flex-col">
                                    <div class="icon pt-4">
                                    <label for="firstImage" class="fa-solid fa-cloud-upload-alt text-4xl text-[#042EFF]"></label>
                                    </div>
                                    <div class="initial-info">
                                    <label for="firstImage" class="block py-2">Browse image:</label>
                                    </div>
                                </div>
                                </div>
                                @error('firstImage')
                                <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                                @enderror
                            </div>
                            <input type="file" name="firstImage" value="{{old('firstImage') ?? $product->firstImage}}" id="firstImage" class="file1-edit" hidden>
                            <div class="md:basis-[23%]">
                                <div class="@error('secondImage') border-red-600 @enderror input-box2-edit file-box flex items-center justify-center flex-col  border-dashed border-2 border-[#042EFF]">
                                    <div class="original-info2-edit flex items-center justify-center flex-col">
                                    <div class="icon pt-4">
                                        <label for="secondImage" class="fa-solid fa-cloud-upload-alt text-4xl text-[#042EFF]"></label>
                                    </div>
                                    <div class="initial-info">
                                        <label for="secondImage" class="block py-2">Browse image:</label>
                                    </div>
                                    </div>
                                </div>
                                @error('secondImage')
                                <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                                @enderror
                            </div>
                            <input type="file" name="secondImage" id="secondImage" class="file2-edit" hidden>
                            <div class="md:basis-[23%]">
                                <div class="@error('thirdImage') border-red-600 @enderror input-box3-edit md:basis-[23%]  file-box flex items-center justify-center flex-col  border-dashed border-2 border-[#042EFF]">
                                    <div class="original-info3-edit flex items-center justify-center flex-col">
                                    <div class="icon pt-4">
                                        <label for="thirdImage" class="fa-solid fa-cloud-upload-alt text-4xl text-[#042EFF]"></label>
                                    </div>
                                    <div class="initial-info">
                                        <label for="thirdImage" class="block py-2">Browse image:</label>
                                    </div>
                                    </div>
                                </div>
                                @error('thirdImage')
                                <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                                @enderror
                            </div>
                            <input type="file" name="thirdImage" id="thirdImage" class="file3-edit" hidden>
                            <div class="md:basis-[23%]">
                                <div class="@error('fourthImage') border-red-600 @enderror input-box4-edit md:basis-[23%]  file-box flex items-center justify-center flex-col  border-dashed border-2 border-[#042EFF]">
                                    <div class="original-info4-edit flex items-center justify-center flex-col">
                                    <div class="icon pt-4">
                                        <label for="fourthImage" class="fa-solid fa-cloud-upload-alt text-4xl text-[#042EFF]"></label>
                                    </div>
                                    <div class="initial-info">
                                        <label for="fourthImage" class="block py-2">Browse image:</label>
                                    </div>
                                    </div>
                                </div>
                                @error('fourthImage')
                                <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                                @enderror
                            </div>
                            <input type="file" name="fourthImage" id="fourthImage" class="file4-edit" hidden>
                        </div>
                        <div class="form-row w-full flex flex-col md:flex-row justify-between">
                            <div class="input-box md:basis-[48%]">
                            <label for="specifications" class="block py-3">Enter product specifications (CSV):</label>
                            <input type="text" name="specifications" id="specifications" value="{{old('specifications') ?? $product->specifications}}" class="@error('specifications') border-red-600 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                            @error('specifications')
                            <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="input-box md:basis-[48%]">
                            <label for="brandName" class="block py-3">Enter the brand name:</label>
                            <input type="text" name="brandName" id="brandName" value="{{old('brandName') ?? $product->brandName}}" class="@error('brandName') border-red-600 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                            @error('brandName')
                            <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                            @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="input-box">
                            <label for="product-description" class="block py-3">Type the product description:</label>
                            <textarea name="productDescription" id="product-description-edit" cols="30" rows="10" class="@error('productDescription') border-red-600 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">{{old('productDescription') ?? $product->productDescription}}</textarea>
                            @error('productDescription')
                            <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                            @enderror
                            </div>
                        </div>
                        <button type="submit" class="capitalize px-4 py-2 bg-[#042EFF] rounded-md text-white my-4">add product</button>
                        </form>
                    </div>
                  </div>
