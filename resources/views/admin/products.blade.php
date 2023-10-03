<x-admin-layout>
@php
            $productCategory = ['Phone', 'Laptop', 'Smartwatch', 'Television'];
@endphp
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
                @forelse ($products as $product)
                <tr>
                  <td class="border-2 py-2 px-2 text-center">{{$product->category}}</td>
                  <td class="border-2 py-2 px-2 text-center">{{$product->name}}</td>
                  <td class="border-2 py-2 px-2 text-center md:px-4 md:translate-x-4 lg:translate-x-8"><img src="{{asset('/storage/' . $product->firstImage)}}" alt="A dell laptop" class="h-14 w-auto"></td>
                  <td class="border-2 py-2 px-2 text-center">${{$product->initialPrice}}</td>
                  <td class="border-2 py-2 px-2 text-center">${{$product->discountPrice}}</td>
                  <td class="border-2 py-2 px-2 text-center capitalize">{{$product->brandName}}</td>
                </tr>
                @empty
                  <p>There are no products in the store</p>
                @endforelse
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
                @forelse ($products as $product)
                <tr>
                  <td class="border-2 py-2 px-2">{!! $product->productDescription !!}</td>
                  <td class="border-2 py-2 px-6 w-1/2">
                    <div class="flex w-full justify-between">
                      <button type="button" class="bg-[#FFCF10] edit-button py-3 px-8 capitalize rounded-md">edit <i class="fa-solid fa-edit pl-2"></i></button>
                      <div class="edit-product bg-white p-4 rounded-md my-4 absolute z-50 top-10 left-24 sm:left-32 lg:left-40 w-3/4 md:w-4/5">
                    <div class="close flex justify-end px-3"><i class="fa-solid fa-times text-2xl p-2 cursor-pointer"></i></div>
                    <h2 class="text-[rgb(4,46,255)] text-base md:text-xl font-semibold py-4 capitalize">edit this product</h2>
                    <div class="edit-product-form">
                        <form action="{{route('product.update', $product)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row w-full flex flex-col md:flex-row justify-between">
                            <div class="input-box md:basis-[48%]">
                            <label for="categoryEdit" class="block py-3">Select Category:</label>
                            <select name="categoryEdit" id="categoryEdit" class="@error('categoryEdit') border-red-500 @enderror border-2 outline-none rounded-md px-4 py-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                                @if (!old('category'))
                                <option value="None" selected disabled hidden>Select a category</option>
                                @endif
                                @foreach ($productCategory as $category)
                                    <option value="{{ $category }}" @selected(old('categoryEdit') || $product->category == $category)>{{ $category }}</option>
                                @endforeach
                            </select>
                            @error('categoryEdit')
                                <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="input-box md:basis-[48%]">
                            <label for="productNameEdit" class="block py-3">Enter Product name:</label>
                            <input type="text" name="productNameEdit" id="productNameEdit" value="{{old('productNameEdit') ?? $product->name}}" class="@error('productNameEdit') border-red-500 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                            @error('productNameEdit')
                                <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                            @enderror
                            </div>
                        </div>
                        <div class="form-row w-full flex flex-col md:flex-row justify-between">
                            <div class="input-box md:basis-[48%]">
                                <label for="initialPrice" class="block py-3">Enter the initial price:</label>
                                <input type="number" name="initialPriceEdit" id="initialPriceEdit" value="{{old('initialPriceEdit') ?? $product->initialPrice}}" class="@error('initialPriceEdit') border-red-600 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                                @error('initialPriceEdit')
                                <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input-box md:basis-[48%]">
                            <label for="discountPriceEdit" class="block py-3">Enter the discounted price:</label>
                            <input type="number" name="discountPriceEdit" id="discountPriceEdit" value="{{old('discountPriceEdit') ?? $product->discountPrice }}" class="@error('discountPriceEdit') border-red-600 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                            @error('discountPriceEdit')
                            <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                            @enderror
                            </div>
                        </div>
                        <p class="capitalize mt-4">Select product images (Start with the primary image):</p>
                        <div class="form-row w-full flex flex-col md:flex-row gap-2 justify-between my-4">
                            <div class="md:basis-[23%]">
                                <div class="@error('firstImageEdit') border-red-600 @enderror input-box1-edit file-box flex items-center justify-center flex-col  border-dashed border-2 border-[#042EFF]">
                                <div class="original-info1-edit flex items-center justify-center flex-col">
                                    <div class="icon pt-4">
                                    <label for="firstImageEdit" class="fa-solid fa-cloud-upload-alt text-4xl text-[#042EFF]"></label>
                                    </div>
                                    <div class="initial-info">
                                    <label for="firstImageEdit" class="block py-2">Browse image:</label>
                                    </div>
                                </div>
                                </div>
                                @error('firstImageEdit')
                                <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                                @enderror
                            </div>
                            <input type="file" name="firstImageEdit" id="firstImageEdit" class="file1-edit" hidden>
                            <div class="md:basis-[23%]">
                                <div class="@error('secondImageEdit') border-red-600 @enderror input-box2-edit file-box flex items-center justify-center flex-col  border-dashed border-2 border-[#042EFF]">
                                    <div class="original-info2-edit flex items-center justify-center flex-col">
                                    <div class="icon pt-4">
                                        <label for="secondImageEdit" class="fa-solid fa-cloud-upload-alt text-4xl text-[#042EFF]"></label>
                                    </div>
                                    <div class="initial-info">
                                        <label for="secondImageEdit" class="block py-2">Browse image:</label>
                                    </div>
                                    </div>
                                </div>
                                @error('secondImageEdit')
                                <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                                @enderror
                            </div>
                            <input type="file" name="secondImageEdit" id="secondImageEdit" class="file2-edit" hidden>
                            <div class="md:basis-[23%]">
                                <div class="@error('thirdImageEdit') border-red-600 @enderror input-box3-edit md:basis-[23%]  file-box flex items-center justify-center flex-col  border-dashed border-2 border-[#042EFF]">
                                    <div class="original-info3-edit flex items-center justify-center flex-col">
                                    <div class="icon pt-4">
                                        <label for="thirdImageEdit" class="fa-solid fa-cloud-upload-alt text-4xl text-[#042EFF]"></label>
                                    </div>
                                    <div class="initial-info">
                                        <label for="thirdImageEdit" class="block py-2">Browse image:</label>
                                    </div>
                                    </div>
                                </div>
                                @error('thirdImageEdit')
                                <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                                @enderror
                            </div>
                            <input type="file" name="thirdImageEdit" id="thirdImageEdit" class="file3-edit" hidden>
                            <div class="md:basis-[23%]">
                                <div class="@error('fourthImageEdit') border-red-600 @enderror input-box4-edit md:basis-[23%]  file-box flex items-center justify-center flex-col  border-dashed border-2 border-[#042EFF]">
                                    <div class="original-info4-edit flex items-center justify-center flex-col">
                                    <div class="icon pt-4">
                                        <label for="fourthImageEdit" class="fa-solid fa-cloud-upload-alt text-4xl text-[#042EFF]"></label>
                                    </div>
                                    <div class="initial-info">
                                        <label for="fourthImageEdit" class="block py-2">Browse image:</label>
                                    </div>
                                    </div>
                                </div>
                                @error('fourthImageEdit')
                                <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                                @enderror
                            </div>
                            <input type="file" name="fourthImageEdit" id="fourthImageEdit" class="file4-edit" hidden>
                        </div>
                        <div class="form-row w-full flex flex-col md:flex-row justify-between">
                            <div class="input-box md:basis-[48%]">
                            <label for="specificationsEdit" class="block py-3">Enter product specifications (CSV):</label>
                            <input type="text" name="specificationsEdit" id="specificationsEdit" value="{{old('specificationsEdit') ?? $product->specifications}}" class="@error('specificationsEdit') border-red-600 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                            @error('specificationsEdit')
                            <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="input-box md:basis-[48%]">
                            <label for="brandNameEdit" class="block py-3">Enter the brand name:</label>
                            <input type="text" name="brandNameEdit" id="brandNameEdit" value="{{old('brandNameEdit') ?? $product->brandName}}" class="@error('brandNameEdit') border-red-600 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                            @error('brandNameEdit')
                            <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                            @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="input-box">
                            <label for="product-description-edit" class="block py-3">Type the product description:</label>
                            <textarea name="productDescriptionEdit" id="product-description-edit" cols="30" rows="10" class="@error('productDescriptionEdit') border-red-600 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">{{old('productDescriptionEdit') ?? $product->productDescription}}</textarea>
                            @error('productDescriptionEdit')
                            <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                            @enderror
                            </div>
                        </div>
                        <button type="submit" class="capitalize px-4 py-2 bg-[#042EFF] rounded-md text-white my-4">add product</button>
                        </form>
                    </div>
                  </div>
                  <script>
                    const input1Edit = document.querySelector('.file1-edit');
                    const input2Edit = document.querySelector('.file2-edit');
                    const input3Edit = document.querySelector('.file3-edit');
                    const input4Edit = document.querySelector('.file4-edit');
                    const fileBox1Edit =  document.querySelector('.input-box1-edit');
                    const fileBox2Edit =  document.querySelector('.input-box2-edit');
                    const fileBox3Edit =  document.querySelector('.input-box3-edit');
                    const fileBox4Edit =  document.querySelector('.input-box4-edit');
                    const orignalInfoBox1Edit =  document.querySelector('.original-info1-edit');
                    const orignalInfoBox2Edit =  document.querySelector('.original-info2-edit');
                    const orignalInfoBox3Edit =  document.querySelector('.original-info3-edit');
                    const orignalInfoBox4Edit =  document.querySelector('.original-info4-edit');

                    input1Edit.addEventListener('change', function(){
                    // input1.click();
                    let file = this.files[0];
                    let fileReader = new FileReader();
                    fileReader.onload = () => {
                        let fileURL = fileReader.result;
                        let imgTag = `<div class="uploaded-image">
                        <img src="${fileURL}" alt="">
                        <button type="button" class="remove-btn1-edit"><i class="fa-solid fa-times"></i></button>
                    </div>`;
                    fileBox1Edit.innerHTML  = imgTag;
                    }
                    fileReader.readAsDataURL(file);
                    });
                    input2Edit.addEventListener('change', function(){
                    // input2.click();
                    let file = this.files[0];
                    let fileReader = new FileReader();
                    fileReader.onload = () => {
                        let fileURL = fileReader.result;
                        let imgTag = `<div class="uploaded-image">
                        <img src="${fileURL}" alt="">
                        <button type="button" class="remove-btn2-edit"><i class="fa-solid fa-times"></i></button>
                    </div>`;
                    fileBox2Edit.innerHTML  = imgTag;
                    }
                    fileReader.readAsDataURL(file);
                    });
                    input3Edit.addEventListener('change', function(){
                    // input3.click();
                    let file = this.files[0];
                    let fileReader = new FileReader();
                    fileReader.onload = () => {
                        let fileURL = fileReader.result;
                        let imgTag = `<div class="uploaded-image">
                        <img src="${fileURL}" alt="">
                        <button type="button" class="remove-btn3-edit"><i class="fa-solid fa-times"></i></button>
                    </div>`;
                    fileBox3Edit.innerHTML  = imgTag;
                    }
                    fileReader.readAsDataURL(file);
                    });
                    input4Edit.addEventListener('change', function(){
                    // input4.click();
                    let file = this.files[0];
                    let fileReader = new FileReader();
                    fileReader.onload = () => {
                        let fileURL = fileReader.result;
                        let imgTag = `<div class="uploaded-image">
                        <img src="${fileURL}" alt="">
                        <button type="button" class="remove-btn4-edit"><i class="fa-solid fa-times"></i></button>
                    </div>`;
                    fileBox4Edit.innerHTML  = imgTag;
                    }
                    fileReader.readAsDataURL(file);
                    });

                    window.onclick = (e) => {
                    if(e.target.classList.contains('remove-btn1-edit')){
                    e.target.parentElement.remove();
                    fileBox1Edit.appendChild(orignalInfoBox1Edit);
                    }else if(e.target.parentElement.classList.contains('remove-btn1-edit')){
                        e.target.parentElement.parentElement.remove();
                        fileBox1Edit.appendChild(orignalInfoBox1Edit);
                    } else if(e.target.classList.contains('remove-btn2-edit')){
                        e.target.parentElement.remove();
                        fileBox2Edit.appendChild(orignalInfoBox2Edit);
                    }else if(e.target.parentElement.classList.contains('remove-btn2-edit')){
                        e.target.parentElement.parentElement.remove();
                        fileBox2Edit.appendChild(orignalInfoBox2Edit);
                    } else if(e.target.classList.contains('remove-btn3-edit')){
                        e.target.parentElement.remove();
                        fileBox3Edit.appendChild(orignalInfoBox3Edit);
                    }else if(e.target.parentElement.classList.contains('remove-btn3-edit')){
                        e.target.parentElement.parentElement.remove();
                        fileBox3Edit.appendChild(orignalInfoBox3Edit);
                    } else if(e.target.classList.contains('remove-btn4-edit')){
                        e.target.parentElement.remove();
                        fileBox4Edit.appendChild(orignalInfoBox4Edit);
                    }else if(e.target.parentElement.classList.contains('remove-btn4-edit')){
                        e.target.parentElement.parentElement.remove();
                        fileBox4Edit.appendChild(orignalInfoBox4Edit);
                    }
                }
                  </script>
                      <button type="button" class="bg-[#FF4004] py-3 px-8 capitalize rounded-md">remove <i class="fa-solid fa-trash pl-2"></i></button>
                    </div>
                  </td>
                </tr>
                @empty
                  <p>There  are no products in the store</p>
                @endforelse
              </tbody>
            </table>
          </div>

        </div>
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
        <script>
            const input1 = document.querySelector('.file1');
            const input2 = document.querySelector('.file2');
            const input3 = document.querySelector('.file3');
            const input4 = document.querySelector('.file4');
            const fileBox1 =  document.querySelector('.input-box1');
            const fileBox2 =  document.querySelector('.input-box2');
            const fileBox3 =  document.querySelector('.input-box3');
            const fileBox4 =  document.querySelector('.input-box4');
            const orignalInfoBox1 =  document.querySelector('.original-info1');
            const orignalInfoBox2 =  document.querySelector('.original-info2');
            const orignalInfoBox3 =  document.querySelector('.original-info3');
            const orignalInfoBox4 =  document.querySelector('.original-info4');



            input1.addEventListener('change', function(){
            // input1.click();
            let file = this.files[0];
            let fileReader = new FileReader();
            fileReader.onload = () => {
                let fileURL = fileReader.result;
                let imgTag = `<div class="uploaded-image">
                <img src="${fileURL}" alt="">
                <button type="button" class="remove-btn1"><i class="fa-solid fa-times"></i></button>
            </div>`;
            fileBox1.innerHTML  = imgTag;
            }
            fileReader.readAsDataURL(file);
            });
            input2.addEventListener('change', function(){
            // input2.click();
            let file = this.files[0];
            let fileReader = new FileReader();
            fileReader.onload = () => {
                let fileURL = fileReader.result;
                let imgTag = `<div class="uploaded-image">
                <img src="${fileURL}" alt="">
                <button type="button" class="remove-btn2"><i class="fa-solid fa-times"></i></button>
            </div>`;
            fileBox2.innerHTML  = imgTag;
            }
            fileReader.readAsDataURL(file);
            });
            input3.addEventListener('change', function(){
            // input3.click();
            let file = this.files[0];
            let fileReader = new FileReader();
            fileReader.onload = () => {
                let fileURL = fileReader.result;
                let imgTag = `<div class="uploaded-image">
                <img src="${fileURL}" alt="">
                <button type="button" class="remove-btn3"><i class="fa-solid fa-times"></i></button>
            </div>`;
            fileBox3.innerHTML  = imgTag;
            }
            fileReader.readAsDataURL(file);
            });
            input4.addEventListener('change', function(){
            // input4.click();
            let file = this.files[0];
            let fileReader = new FileReader();
            fileReader.onload = () => {
                let fileURL = fileReader.result;
                let imgTag = `<div class="uploaded-image">
                <img src="${fileURL}" alt="">
                <button type="button" class="remove-btn4"><i class="fa-solid fa-times"></i></button>
            </div>`;
            fileBox4.innerHTML  = imgTag;
            }
            fileReader.readAsDataURL(file);
            });
            window.onclick = (e) => {
            if(e.target.classList.contains('remove-btn1')){
                e.target.parentElement.remove();
                fileBox1.appendChild(orignalInfoBox1);
            }else if(e.target.parentElement.classList.contains('remove-btn1')){
                e.target.parentElement.parentElement.remove();
                fileBox1.appendChild(orignalInfoBox1);
            } else if(e.target.classList.contains('remove-btn2')){
                e.target.parentElement.remove();
                fileBox2.appendChild(orignalInfoBox2);
            }else if(e.target.parentElement.classList.contains('remove-btn2')){
                e.target.parentElement.parentElement.remove();
                fileBox2.appendChild(orignalInfoBox2);
            } else if(e.target.classList.contains('remove-btn3')){
                e.target.parentElement.remove();
                fileBox3.appendChild(orignalInfoBox3);
            }else if(e.target.parentElement.classList.contains('remove-btn3')){
                e.target.parentElement.parentElement.remove();
                fileBox3.appendChild(orignalInfoBox3);
            } else if(e.target.classList.contains('remove-btn4')){
                e.target.parentElement.remove();
                fileBox4.appendChild(orignalInfoBox4);
            }else if(e.target.parentElement.classList.contains('remove-btn4')){
                e.target.parentElement.parentElement.remove();
                fileBox4.appendChild(orignalInfoBox4);
            }
            }
        </script>
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
