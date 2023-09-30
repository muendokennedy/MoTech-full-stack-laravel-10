<x-admin-layout>
<div class="recent-sales bg-white p-4 rounded-md">
          <h2 class="text-[rgb(4,46,255)] font-semibold text-lg md:text-xl py-4 capitalize">Products in stock</h2>
          <div class="table-container overflow-x-auto">
            <table class="w-[45rem] md:w-full border-2 my-4">
              <thead>
                <tr>
                  <th class="border-2 py-4 px-2">Category</th>
                  <th class="border-2 py-4 px-2">Name</th>
                  <th class="border-2 py-4 px-2">Image</th>
                  <th class="border-2 py-4 px-2">Price</th>
                  <th class="border-2 py-4 px-2">Discounted price</th>
                  <th class="border-2 py-4 px-2">Brand</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                <tr>
                  <td class="border-2 py-2 px-2 text-center">{{$product->category}}</td>
                  <td class="border-2 py-2 px-2 text-center">{{$product->name}}</td>
                  <td class="border-2 py-2 px-2 text-center md:px-4 md:translate-x-4 lg:translate-x-8"><img src="{{asset('/storage/' . $product->firstImage)}}" alt="A dell laptop" class="h-14 w-auto"></td>
                  <td class="border-2 py-2 px-2 text-center">${{$product->initialPrice}}</td>
                  <td class="border-2 py-2 px-2 text-center">${{$product->discountPrice}}</td>
                  <td class="border-2 py-2 px-2 text-center">{{$product->brandName}}</td>
                </tr>
                @endforeach
                <tr>
                  <td class="border-2 py-2 px-2 text-center">Laptop</td>
                  <td class="border-2 py-2 px-2 text-center">HP laptop 15 ci7</td>
                  <td class="border-2 py-2 px-2 text-center md:px-4 md:translate-x-4 lg:translate-x-8"><img src="/images/hp laptop 15 ci7.png" alt="An HP  laptop" class="h-14 w-auto"></td>
                  <td class="border-2 py-2 px-2 text-center">$800</td>
                  <td class="border-2 py-2 px-2 text-center">$600</td>
                  <td class="border-2 py-2 px-2 text-center">HP</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="table-container overflow-x-auto">
            <table class="w-[45rem] lg:w-[90%] border-2 mt-8">
              <thead>
                <tr>
                  <th class="border-2 py-4">Product Description</th>
                  <th class="border-2 py-4">Manage</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                <tr>
                  <td class="border-2 py-2 px-2">{!! $product->productDescription !!}</td>
                  <td class="border-2 py-2 px-6 w-1/2">
                    <div class="flex w-full justify-between">
                      <button type="button" class="bg-[#FFCF10] edit-button py-3 px-8 capitalize rounded-md">edit <i class="fa-solid fa-edit pl-2"></i></button>
                      <button type="button" class="bg-[#FF4004] py-3 px-8 capitalize rounded-md">remove <i class="fa-solid fa-trash pl-2"></i></button>
                    </div>
                  </td>
                </tr>
                @endforeach
                <tr>
                  <td class="border-2 py-2 px-2">Reiciendis et vel illo quod delectus non sequi est. Ut magni consectetur. Facilis est omnis accusantium neque omnis. Quo qui omnis culpa omnis.</td>
                  <td class="border-2 py-2 px-6 w-1/2">
                    <div class="flex w-full justify-between">
                      <button type="button" class="bg-[#FFCF10] edit-button py-3 px-8 capitalize rounded-md">edit <i class="fa-solid fa-edit pl-2"></i></button>
                      <button type="button" class="bg-[#FF4004] py-3 px-8 capitalize rounded-md">remove <i class="fa-solid fa-trash pl-2"></i></button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
        @php
            $productCategory = ['Phone', 'Laptop', 'Smartwatch', 'Television'];
        @endphp
        @if (session('productSuccess'))
            <div class="success-message fixed top-36 left-1/2 -translate-x-1/2 px-4 py-2 rounded-md bg-green-600 text-white text-base">
                {{ session('productSuccess') }}
            </div>
        @endif
        <div class="new-product bg-white p-4 rounded-md my-4">
          <h2 class="text-[rgb(4,46,255)] font-semibold text-base md:text-xl py-4 capitalize">add new product</h2>
          <div class="new-product-form">
            <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="form-row w-full flex flex-col md:flex-row justify-between">
                <div class="input-box md:basis-[48%]">
                  <label for="category" class="block py-3">Select Category:</label>
                  <select name="category" id="category" class="@error('category') border-red-500 @enderror border-2 outline-none rounded-md px-4 py-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                    @if (!old('category'))
                    <option value="None" selected disabled hidden>Select a category</option>
                    @endif
                    @foreach ($productCategory as $category)
                        <option value="{{ $category }}" @selected(old('category') == $category)>{{ $category }}</option>
                    @endforeach
                  </select>
                  @error('category')
                    <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
                <div class="input-box md:basis-[48%]">
                  <label for="productName" class="block py-3">Enter Product name:</label>
                  <input type="text" name="productName" id="productName" value="{{old('productName')}}" class="@error('productName') border-red-500 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                  @error('productName')
                    <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
              </div>
              <div class="form-row w-full flex flex-col md:flex-row justify-between">
                <div class="input-box md:basis-[48%]">
                    <label for="initialPrice" class="block py-3">Enter the initial price:</label>
                    <input type="number" name="initialPrice" id="initialPrice" value="{{old('initialPrice')}}" class="@error('initialPrice') border-red-600 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                    @error('initialPrice')
                    <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                    @enderror
                </div>
                <div class="input-box md:basis-[48%]">
                  <label for="discountPrice" class="block py-3">Enter the discounted price:</label>
                  <input type="number" name="discountPrice" id="discountPrice" value="{{old('discountPrice')}}" class="@error('discountPrice') border-red-600 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                  @error('discountPrice')
                  <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
              </div>`
              <p class="capitalize mt-4">Select product images (Start with the primary image):</p>
              <div class="form-row w-full flex flex-col md:flex-row gap-2 justify-between my-4">
                <div class="md:basis-[23%]">
                    <div class="@error('firstImage') border-red-600 @enderror input-box1 file-box flex items-center justify-center flex-col  border-dashed border-2 border-[#042EFF]">
                      <div class="original-info1 flex items-center justify-center flex-col">
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
                  <input type="file" name="firstImage" id="firstImage" class="file1" hidden>
                  <div class="md:basis-[23%]">
                      <div class="@error('secondImage') border-red-600 @enderror input-box2 file-box flex items-center justify-center flex-col  border-dashed border-2 border-[#042EFF]">
                        <div class="original-info2 flex items-center justify-center flex-col">
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
                  <input type="file" name="secondImage" id="secondImage" class="file2" hidden>
                  <div class="md:basis-[23%]">
                      <div class="@error('thirdImage') border-red-600 @enderror input-box3 md:basis-[23%]  file-box flex items-center justify-center flex-col  border-dashed border-2 border-[#042EFF]">
                        <div class="original-info3 flex items-center justify-center flex-col">
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
                  <input type="file" name="thirdImage" id="thirdImage" class="file3" hidden>
                  <div class="md:basis-[23%]">
                      <div class="@error('fourthImage') border-red-600 @enderror input-box4 md:basis-[23%]  file-box flex items-center justify-center flex-col  border-dashed border-2 border-[#042EFF]">
                        <div class="original-info4 flex items-center justify-center flex-col">
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
                  <input type="file" name="fourthImage" id="fourthImage" class="file4" hidden>
              </div>
              <div class="form-row w-full flex flex-col md:flex-row justify-between">
                <div class="input-box md:basis-[48%]">
                  <label for="specifications" class="block py-3">Enter product specifications (CSV):</label>
                  <input type="text" name="specifications" id="specifications" value="{{old('specifications')}}" class="@error('specifications') border-red-600 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                  @error('specifications')
                  <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
                <div class="input-box md:basis-[48%]">
                  <label for="brandName" class="block py-3">Enter the brand name:</label>
                  <input type="text" name="brandName" id="brandName" value="{{old('brandName')}}" class="@error('brandName') border-red-600 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                  @error('brandName')
                  <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
              </div>
              <div class="form-row">
                <div class="input-box">
                  <label for="product-description" class="block py-3">Type the product description:</label>
                  <textarea name="productDescription" id="product-description" cols="30" rows="10" class="@error('productDescription') border-red-600 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">{{old('productDescription')}}</textarea>
                  @error('productDescription')
                  <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
              </div>
              <button type="submit" class="capitalize px-4 py-2 bg-[#042EFF] rounded-md text-white my-4">add product</button>
            </form>
          </div>
          </table>
        </div>
        <div class="edit-product bg-white p-4 rounded-md my-4 absolute z-50 top-10 left-24 sm:left-32 lg:left-40 w-3/4 md:w-4/5">
      <div class="close flex justify-end px-3"><i class="fa-solid fa-times text-2xl p-2 cursor-pointer"></i></div>
      <h2 class="text-[rgb(4,46,255)] text-base md:text-xl font-semibold py-4 capitalize">Edit this product</h2>
      <div class="edit-product-form">
        <form action="#">
          <div class="form-row w-full flex flex-col md:flex-row justify-between">
            <div class="input-box md:basis-[48%]">
              <label for="category" class="block py-3">Select Category:</label>
              <select name="category" id="category" class="border-2 outline-none rounded-md px-4 py-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out" autofocus>
                <option value="None">None</option>
                <option value="Phone">Phone</option>
                <option value="Laptop">Laptop</option>
                <option value="Smartwatch">Smartwatch</option>
                <option value="Television">Television</option>
              </select>
            </div>
            <div class="input-box md:basis-[48%]">
              <label for="productName" class="block py-3">Enter Product name:</label>
              <input type="text" name="productName" id="productName" class="px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out" autofocus>
            </div>
          </div>
          <div class="form-row w-full flex flex-col md:flex-row justify-between">
            <div class="input-box md:basis-[48%]">
              <label for="specifications" class="block py-3">Enter product specifications (CSV):</label>
              <input type="text" name="specifications" id="specifications" class="px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out" autofocus>
            </div>
            <div class="input-box md:basis-[48%]">
              <label for="initialPrice" class="block py-3">Enter the initial price:</label>
              <input type="number" name="initialPrice" id="initialPrice" class="px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out" autofocus>
            </div>
          </div>
          <div class="form-row w-full flex flex-col md:flex-row gap-2 justify-between my-4">
            <div class="input-box1-edit md:basis-[23%]  file-box flex items-center justify-center flex-col  border-dashed border-2 border-[#042EFF]">
              <div class="original-info1-edit flex items-center justify-center flex-col">
                <div class="icon pt-4">
                  <label for="productImage1-edit" class="fa-solid fa-cloud-upload-alt text-4xl text-[#042EFF]"></label>
                </div>
                <div class="initial-info">
                  <label for="productImage1-edit" class="block py-2">Browse image:</label>
                </div>
              </div>
            </div>
              <input type="file" name="productImage1" id="productImage1-edit" class="file1-edit" hidden>
            <div class="input-box2-edit md:basis-[23%]  file-box flex items-center justify-center flex-col  border-dashed border-2 border-[#042EFF]">
              <div class="original-info2-edit flex items-center justify-center flex-col">
                <div class="icon pt-4">
                  <label for="productImage2-edit" class="fa-solid fa-cloud-upload-alt text-4xl text-[#042EFF]"></label>
                </div>
                <div class="initial-info">
                  <label for="productImage2-edit" class="block py-2">Browse image:</label>
                </div>
              </div>
            </div>
              <input type="file" name="productImage2" id="productImage2-edit" class="file2-edit" hidden>
            <div class="input-box3-edit md:basis-[23%]  file-box flex items-center justify-center flex-col  border-dashed border-2 border-[#042EFF]">
              <div class="original-info3-edit flex items-center justify-center flex-col">
                <div class="icon pt-4">
                  <label for="productImage3-edit" class="fa-solid fa-cloud-upload-alt text-4xl text-[#042EFF]"></label>
                </div>
                <div class="initial-info">
                  <label for="productImage3-edit" class="block py-2">Browse image:</label>
                </div>
              </div>
            </div>
              <input type="file" name="productImage3" id="productImage3-edit" class="file3-edit" hidden>
            <div class="input-box4-edit md:basis-[23%]  file-box flex items-center justify-center flex-col  border-dashed border-2 border-[#042EFF]">
              <div class="original-info4-edit flex items-center justify-center flex-col">
                <div class="icon pt-4">
                  <label for="productImage4-edit" class="fa-solid fa-cloud-upload-alt text-4xl text-[#042EFF]"></label>
                </div>
                <div class="initial-info">
                  <label for="productImage4-edit" class="block py-2">Browse image:</label>
                </div>
              </div>
            </div>
              <input type="file" name="productImage4" id="productImage4-edit" class="file4-edit" hidden>
          </div>
          <div class="form-row w-full flex flex-col md:flex-row justify-between">
            <div class="input-box md:basis-[48%]">
              <label for="discountPrice" class="block py-3">Enter the discounted price:</label>
              <input type="number" name="discountPrice" id="discountPrice" class="px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out" autofocus>
            </div>
            <div class="input-box md:basis-[48%]">
              <label for="brandName" class="block py-3">Enter the brand name:</label>
              <input type="text" name="brandName" id="brandName" class="px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out" autofocus>
            </div>
          </div>
          <div class="form-row">
            <div class="input-box">
              <label for="product-description-edit" class="block py-3">Type the product description:</label>
              <textarea name="productDescription" id="product-description-edit" cols="30" rows="10" class="px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out" autofocus></textarea>
            </div>
          </div>
          <button type="submit" class="capitalize px-4 py-2 bg-[#042EFF] rounded-md text-white my-4">edit product</button>
        </form>
      </div>
      </table>
    </div>
    <!-- <script src="js/sidebarToggle.js"></script>
    <script src="js/productEditMoodle.js"></script>
    <script src="js/imageBrowser.js"></script> -->
    <script>
      ClassicEditor
          .create( document.querySelector( '#product-description' ) )
          .catch( error => {
              console.error( error );
          } );
      ClassicEditor
          .create( document.querySelector( '#product-description-edit' ) )
          .catch( error => {
              console.error( error );
          } );
    </script>
</x-admin-layout>
