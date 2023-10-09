<x-admin-layout>
@php
            $productCategory = ['Phone', 'Laptop', 'Smartwatch', 'Television', 'Tablet'];
@endphp
        @if (session('productSuccess'))
            <div class="success-message fixed top-36 left-1/2 -translate-x-1/2 px-4 py-2 rounded-md bg-green-600 text-white text-base">
                {{ session('productSuccess') }}
            </div>
        @endif
        <div class="new-product bg-white p-4 rounded-md my-4"  id="new-product">
            <div class="product-header flex gap-4 items-center">
                <a href="{{route('admin.products')}}" class="capitalize px-4 py-2 bg-[#042EFF] rounded-md text-white my-4">Back</a>
                <h2 class="text-[rgb(4,46,255)] font-semibold text-base md:text-xl py-4 capitalize">Edit this product</h2>
            </div>
          <div class="new-product-form">
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
                        <option value="{{ $category }}" @selected(old('category') == $category || $product->category == $category)>{{ $category }}</option>
                    @endforeach
                  </select>
                  @error('category')
                    <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
                <div class="input-box md:basis-[48%]">
                  <label for="productName" class="block py-3">Enter Product name:</label>
                  <input type="text" name="productName" id="productName" value="{{old('productName') ?? $product->name }}" class="@error('productName') border-red-500 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
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
                  <input type="number" name="discountPrice" id="discountPrice" value="{{old('discountPrice') ?? $product->discountPrice}}" class="@error('discountPrice') border-red-600 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
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
                  <input type="file" name="fourthImage"  id="fourthImage" class="file4" hidden>
                  <input type="text" name="fourthImage" value="{{asset('/storage/'.$product->fourthImage)}}" id="fourthImage" class="file4-image" hidden>
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
              <div class="form-row w-full flex flex-col md:flex-row justify-between">
                <div class="input-box md:basis-[48%]">
                  <label for="avgRating" class="block py-3">Enter product average rating:</label>
                  <input type="text" name="avgRating" id="avgRating" value="{{old('avgRating') ?? $product->avgRating}}" class="@error('avgRating') border-red-600 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                  @error('avgRating')
                  <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
                <div class="input-box md:basis-[48%]">
                  <label for="productWarranty" class="block py-3">Enter the product warranty:</label>
                  <input type="text" name="productWarranty" id="productWarranty" value="{{old('productWarranty') ?? $product->productWarranty}}" class="@error('productWarranty') border-red-600 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
                  @error('productWarranty')
                  <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
              </div>
              <div class="form-row">
                <div class="input-box">
                  <label for="product-description" class="block py-3">Type the product description(End the first sentence with pipe(|) then period(.)):</label>
                  <textarea name="productDescription" id="product-description-edit" cols="30" rows="10" class="@error('productDescription') border-red-600 @enderror px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">{{old('productDescription') ?? $product->productDescription}}</textarea>
                  @error('productDescription')
                  <p class="text-red-500 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
              </div>
              <button type="submit" class="capitalize px-4 py-2 bg-[#042EFF] rounded-md text-white my-4">update product</button>
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
            const fileFourImage = document.querySelector('.file4-image');

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
                fileBox4.classList.add('file4-remove');
            }
            }
        </script>
    <!-- <script src="js/sidebarToggle.js"></script>
    <script src="js/productEditMoodle.js"></script>
    <script src="js/imageBrowser.js"></script> -->
    <script>
      ClassicEditor
          .create( document.querySelector( '#product-description-edit' ) )
          .catch( error => {
              console.error( error );
          } );
    </script>
</x-admin-layout>
