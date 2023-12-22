<x-app-layout>
@php
            if(auth('web')->user()){
                $extractedName = explode(' ', auth('web')->user()->name);
                $firstCustomerName = $extractedName[0];
            }
@endphp
<div class="product-addcart-confirm bg-green-200 rounded-md py-2 px-4 w-1/2 m-auto fixed top-1/3 left-1/2 -translate-x-1/2 z-50 hidden">
        <div onclick="this.parentElement.style.display = 'none'" class="addcart-close text-2xl absolute right-2 top-0"><i class="fa-solid fa-times p-2 cursor-pointer font-bold"></i></div>
        <p class="text-green-700 mt-6 mb-4">
            @auth('web')
              {{$firstCustomerName}}
            @endauth, <span>The product has been added to cart successfully!</span>
        </p>
</div>
<div class="product-alreadycart-confirm bg-red-200 rounded-md py-2 px-4 w-1/2 m-auto fixed top-1/3 left-1/2 -translate-x-1/2 z-50 hidden">
        <div onclick="this.parentElement.style.display = 'none'" class="addcart-close text-2xl absolute right-2 top-0"><i class="fa-solid fa-times p-2 cursor-pointer font-bold"></i></div>
        <p class="text-red-700 mt-6 mb-4">
            @auth('web')
              {{$firstCustomerName}}
            @endauth, <span>The product has been added to cart successfully!</span>
        </p>
</div>
<script>
              const productCartAlertMoodle = document.querySelector('.product-addcart-confirm');
              const moodleText = productCartAlertMoodle.querySelector('span');
              const productAlreadyCartAlert = document.querySelector('.product-alreadycart-confirm');
              const alreadyText = productAlreadyCartAlert.querySelector('span');

              function addToWishlist(product_id){
                // Get the data
                const productId = {
                  id: product_id
                };

                // Create an AJAX Request
                const xhrHttp = new XMLHttpRequest();
                let targetUrl = "{{ route('add.wishlist') }}";

                xhrHttp.open('POST', targetUrl, true);
                xhrHttp.setRequestHeader('Content-Type', 'application/json');
                xhrHttp.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

                xhrHttp.onreadystatechange = function () {
                    if(xhrHttp.readyState === 4 && xhrHttp.status === 200){
                        let response = JSON.parse(xhrHttp.responseText);
                        if(response.status === 'login to continue'){
                            location.href = '/login/customer';
                        } else if(response.status === 'The product has been added to wishlist successfully'){
                            productCartAlertMoodle.style.display = 'block';
                            moodleText.textContent = response.status;
                            setTimeout(() => {
                              productCartAlertMoodle.style.display = 'none';
                            }, 5000);
                        } else if(response.status === 'The product is already in the wishlist'){
                            productAlreadyCartAlert.style.display = 'block';
                            alreadyText.textContent = response.status;
                            setTimeout(() => {
                                productAlreadyCartAlert.style.display = 'none';
                            }, 5000);
                        }
                    } else if(xhrHttp.readyState === 4){
                        console.log('There was an error in making the request');
                    }
                };
                xhrHttp.send(JSON.stringify(productId));
              }
            </script>            <script>
              const productCartAlertMoodle = document.querySelector('.product-addcart-confirm');
              const moodleText = productCartAlertMoodle.querySelector('span');
              const productAlreadyCartAlert = document.querySelector('.product-alreadycart-confirm');
              const alreadyText = productAlreadyCartAlert.querySelector('span');

              function addToWishlist(product_id){
                // Get the data
                const productId = {
                  id: product_id
                };

                // Create an AJAX Request
                const xhrHttp = new XMLHttpRequest();
                let targetUrl = "{{ route('add.wishlist') }}";

                xhrHttp.open('POST', targetUrl, true);
                xhrHttp.setRequestHeader('Content-Type', 'application/json');
                xhrHttp.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

                xhrHttp.onreadystatechange = function () {
                    if(xhrHttp.readyState === 4 && xhrHttp.status === 200){
                        let response = JSON.parse(xhrHttp.responseText);
                        if(response.status === 'login to continue'){
                            location.href = '/login/customer';
                        } else if(response.status === 'The product has been added to wishlist successfully'){
                            productCartAlertMoodle.style.display = 'block';
                            moodleText.textContent = response.status;
                            setTimeout(() => {
                              productCartAlertMoodle.style.display = 'none';
                            }, 8000);
                        } else if(response.status === 'The product is already in the wishlist'){
                            productAlreadyCartAlert.style.display = 'block';
                            alreadyText.textContent = response.status;
                            setTimeout(() => {
                                productAlreadyCartAlert.style.display = 'none';
                            }, 8000);
                        }
                    } else if(xhrHttp.readyState === 4){
                        console.log('There was an error in making the request');
                    }
                };
                xhrHttp.send(JSON.stringify(productId));
              }
            </script>
    <section class="product-home mt-16 px-[4%] mx-auto lg:max-w-[1500px]">
        <div
        class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
      >
        <span class="text-[#68A4FE] px-2">product</span> page
      </div>
      <div class="product flex items-center flex-col md:flex-row justify-between w-full">
        <div class="w-full md:basis-[48%] p-2 sm:p-4 flex flex-col items-center">
          <div class="master-image w-[6rem] md:w-[12rem] h-auto md:h-auto flex justify-center items-center my-6">
            <img src="{{asset('/storage/' . $product->firstImage)}}" alt="Detailed product image" class="m-auto w-full h-full object-cover">
          </div>
          <div class="w-full sm:w-4/5 flex justify-between gap-2 md:gap-4 mx-auto">
            <div class="small-image h-20 border-2 p-1 sm:p-2 rounded-md cursor-pointer">
              <img src="{{asset('/storage/' . $product->firstImage)}}" alt="Extra small image description" class="h-full object-cover">
            </div>
            <div class="small-image h-20 border-2 p-1 sm:p-2 rounded-md cursor-pointer">
              <img src="{{asset('/storage/'. $product->secondImage)}}" alt="Extra small image description" class="h-full object-cover">
            </div>
            <div class="small-image h-20 border-2 p-1 sm:p-2 rounded-md cursor-pointer">
              <img src="{{asset('/storage/'. $product->thirdImage)}}" alt="Extra small image description" class="h-full object-cover">
            </div>
            <div class="small-image h-20 border-2 p-1 sm:p-2 rounded-md cursor-pointer">
              <img src="{{asset('/storage/'. $product->fourthImage)}}" alt="Extra small image description" class="h-full object-cover">
            </div>
          </div>
          <div class="action-button-container my-4 sm:my-8 flex w-full justify-between">
            <button type="submit" class="text-sm sm:text-base px-2 sm:px-4 py-3 rounded-md w-40 bg-[#ffcf10] basis-[48%] capitalize">Proceed to buy</button>
            <button type="submit" class="text-sm sm:text-base px-2 sm:px-4 py-3 rounded-md w-40 bg-[#68a4fe] basis-[48%] text-white capitalize">save for later</button>
          </div>
        </div>
        <div class="product-content-details w-full md:basis-[48%] p-2 sm:p-4 my-2 md:my-4">
          <div class="product-title font-semibold text-lg sm:text-xl mb-4 text-[#384857] capitalize">{{$product->name}}</div>
          <div class="product-manufacturer text-sm text-[#384857] capitalize">Produced by {{$product->brandName}}</div>
          <div class="flex gap-4 items-center my-2 border-b-2 py-4">
            <div class="text-xs">
                @switch($product->avgRating)
                    @case(1)
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#d3d2cd]"></i>
                    <i class="fa-solid fa-star text-[#d3d2cd]"></i>
                    <i class="fa-solid fa-star text-[#d3d2cd]"></i>
                    <i class="fa-solid fa-star text-[#d3d2cd]"></i>
                    @break
                    @case(1.5)
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star-half-stroke text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#d3d2cd]"></i>
                    <i class="fa-solid fa-star text-[#d3d2cd]"></i>
                    <i class="fa-solid fa-star text-[#d3d2cd]"></i>
                    @break
                    @case(2)
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#d3d2cd]"></i>
                    <i class="fa-solid fa-star text-[#d3d2cd]"></i>
                    <i class="fa-solid fa-star text-[#d3d2cd]"></i>
                    @break
                    @case(2.5)
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star-half-stroke text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#d3d2cd]"></i>
                    <i class="fa-solid fa-star text-[#d3d2cd]"></i>
                    @break
                    @case(3)
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#d3d2cd]"></i>
                    <i class="fa-solid fa-star text-[#d3d2cd]"></i>
                    @break
                    @case(3.5)
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star-half-stroke text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#d3d2cd]"></i>
                    @break
                    @case(4)
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#d3d2cd]"></i>
                    @break
                    @case(4.5)
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star-half-stroke text-[#ffcf10]"></i>
                    @break
                    @case(5)
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    <i class="fa-solid fa-star text-[#ffcf10]"></i>
                    @default
                @endswitch
            </div>
            <div class="rating-text text-xs text-[#68a4fe]">
              100,450+ ratings | over 100k delivered
            </div>
          </div>
          <div class="price-details my-2">
            <p class="first-price text-sm py-2 text-[#384857]">Most recent price: <span>${{number_format($product->initialPrice)}}</span></p>
            <p class="deal-price text-sm py-2 text-[#384857]">Deal price: <span class="text-[#FF412C]">${{number_format($product->discountPrice)}}</span> inclusive of <span class="inline font-semibold text-[#384857]">VAT</span></p>
            @php
                $save = $product->initialPrice - $product->discountPrice;
            @endphp
            <p class="save-amount text-sm py-2 capitalize text-[#384857]">save: <span class="text-[#FF412C]">${{number_format($save)}}</span></p>
          </div>
          <div class="vendor-action-container flex justify-between w-full py-4 border-b-2 text-center">
            <div class="replacement flex flex-col gap-4 items-center">
              <span class="w-[3rem] h-[3rem] sm:w-[4rem] sm:h-[4rem] flex items-center justify-center text-center leading-[3rem] sm:leading-[4rem] bg-[#ECEEEF] rounded-full border-2 border-[#8DAFCF]">
                <i class="fa-solid fa-repeat text-[#68a4fe] text-lg sm:text-2xl"></i>
              </span>
              <div class="return-text text-sm text-[#68a4fe]">20 days of <br> replacement</div>
            </div>
            <div class="replacement flex flex-col gap-4 items-center">
              <span class="w-[3rem] h-[3rem] sm:w-[4rem] sm:h-[4rem] flex items-center justify-center text-center leading-[3rem] sm:leading-[4rem] bg-[#ECEEEF] rounded-full border-2 border-[#8DAFCF]">
                <i class="fa-solid fa-van-shuttle text-[#68a4fe] text-lg sm:text-2xl"></i>
              </span>
              <div class="return-text text-sm text-[#68a4fe]">Fast delivery</div>
            </div>
            <div class="replacement flex flex-col gap-4 items-center">
              <span class="w-[3rem] h-[3rem] sm:w-[4rem] sm:h-[4rem] flex items-center justify-center text-center leading-[3rem] sm:leading-[4rem] bg-[#ECEEEF] rounded-full border-2 border-[#8DAFCF]">
                <i class="fa-solid fa-check-double text-[#68a4fe] text-lg sm:text-2xl"></i>
              </span>
              <div class="return-text text-sm text-[#68a4fe]">{{$product->productWarranty}} warranty</div>
            </div>
          </div>
          <div class="delivery-timeline text-sm my-4">Delivery by: <strong> {{date('M d', strtotime('+3 days'))}} - {{date('M d', strtotime('+8 days'))}}</strong></div>
          <div class="vendor-name text-sm my-4">
            <span>Sold by {{ config('app.name') }} electronics</span> <span>(250 out of 300 already sold)</span>
          </div>
          @php
              $specs = explode(',',$product->specifications);
          @endphp
          <div class="product-specification-details flex justify-between my-6 text-[#384857] mb-auto">
            <div class="ram flex flex-col gap-2">
              <span class="block font-semibold text-[#384857] text-base sm:text-xl">RAM size:</span>
              <span class="border-2 px-2 sm:px-6 md:px-3 py-2 rounded-md font-normal sm:font-semibold text-base sm:text-xl">{{$specs[0]}}</span>
            </div>
            <div class="ram flex flex-col gap-2">
              <span class="block font-semibold text-[#384857] text-base sm:text-xl">
              @if ($product->category === 'Phone')
              Resolution:
              @elseif ($product->category === 'Laptop')
              Memory:
              @elseif ($product->category === 'Television')
              Screen:
              @elseif ($product->category === 'Smartwatch')
              Battery:
              @elseif ($product->category === 'Tablet')
              Resolution:
              @endif
            </span>
              <span class="border-2 px-2 sm:px-6 md:px-3 py-2 rounded-md font-normal sm:font-semibold text-base sm:text-xl">{{$specs[1]}}</span>
            </div>
            <div class="ram flex flex-col gap-2">
              <span class="block font-semibold text-[#384857] text-base sm:text-xl">
              @if ($product->category === 'Phone')
              Camera:
              @elseif ($product->category === 'Laptop')
              Graphics:
              @elseif ($product->category === 'Television')
              Screen:
              @elseif ($product->category === 'Smartwatch')
              Battery:
              @elseif ($product->category === 'Tablet')
              Battery:
              @endif
              </span>
              <span class="border-2 px-2 sm:px-6 md:px-3 py-2 rounded-md font-normal sm:font-semibold text-base sm:text-xl">{{$specs[2]}}</span>
            </div>
          </div>
        </div>
      </div>
      </section>
      <section class="product-description px-[4%] mx-auto lg:max-w-[1500px]">
        <div
        class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
      >
        product description
      </div>
      <p class="description-text text-sm my-4">
      @php
        $modifiedProductDescription = str_replace('|', '', $product->productDescription);
      @endphp
        {!! $modifiedProductDescription !!}
      </p>
      </section>
      <section class="related-products px-[4%] mx-auto lg:max-w-[1500px]">
        <div
        class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
      >
        <span class="text-[#68A4FE] px-2">related</span> products
      </div>
      <div class="top-sales-container grid mx-auto w-[95%] gap-3">
        <div class="product-box text-center my-2 sm:my-4 border-2 py-4">
          <div class="flex justify-center items-center">
            <div class="product-image">
              <img src="images/redmi note 12.png" alt="A mobile phone" />
            </div>
          </div>
          <div class="product-title text-sm font-normal sm:font-semibold">
            infinix hot 12
          </div>
          <div class="star-box text-center text-xs sm:text-base text-[#FFCF10] my-2 sm:my-4">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <div class="flex justify-between w-20 sm:w-24 mx-auto">
            <div
              class="deal-price my-1 text-xs sm:text-base sm:my-3 font-semibold line-through opacity-50"
            >
              $206
            </div>
            <div class="first-price my-1 text-xs sm:text-base sm:my-3 font-semibold">$136</div>
          </div>
          <button class="add-cart-btn text-xs">add to cart</button>
        </div>
        <div class="product-box text-center my-2 sm:my-4 border-2 py-4">
          <div class="flex justify-center items-center">
            <div class="product-image">
              <img src="images/redmi note 12.png" alt="A mobile phone" />
            </div>
          </div>
          <div class="product-title text-sm font-normal sm:font-semibold">
            infinix hot 12
          </div>
          <div class="star-box text-center text-xs sm:text-base text-[#FFCF10] my-2 sm:my-4">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <div class="flex justify-between w-20 sm:w-24 mx-auto">
            <div
              class="deal-price my-1 text-xs sm:text-base sm:my-3 font-semibold line-through opacity-50"
            >
              $206
            </div>
            <div class="first-price my-1 text-xs sm:text-base sm:my-3 font-semibold">$136</div>
          </div>
          <button class="add-cart-btn text-xs">add to cart</button>
        </div>
        <div class="product-box text-center my-2 sm:my-4 border-2 py-4">
          <div class="flex justify-center items-center">
            <div class="product-image">
              <img src="images/redmi note 12.png" alt="A mobile phone" />
            </div>
          </div>
          <div class="product-title text-sm font-normal sm:font-semibold">
            infinix hot 12
          </div>
          <div class="star-box text-center text-xs sm:text-base text-[#FFCF10] my-2 sm:my-4">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <div class="flex justify-between w-20 sm:w-24 mx-auto">
            <div
              class="deal-price my-1 text-xs sm:text-base sm:my-3 font-semibold line-through opacity-50"
            >
              $206
            </div>
            <div class="first-price my-1 text-xs sm:text-base sm:my-3 font-semibold">$136</div>
          </div>
          <button class="add-cart-btn text-xs">add to cart</button>
        </div>
        <div class="product-box text-center my-2 sm:my-4 border-2 py-4">
          <div class="flex justify-center items-center">
            <div class="product-image">
              <img src="images/redmi note 12.png" alt="A mobile phone" />
            </div>
          </div>
          <div class="product-title text-sm font-normal sm:font-semibold">
            infinix hot 12
          </div>
          <div class="star-box text-center text-xs sm:text-base text-[#FFCF10] my-2 sm:my-4">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <div class="flex justify-between w-20 sm:w-24 mx-auto">
            <div
              class="deal-price my-1 text-xs sm:text-base sm:my-3 font-semibold line-through opacity-50"
            >
              $206
            </div>
            <div class="first-price my-1 text-xs sm:text-base sm:my-3 font-semibold">$136</div>
          </div>
          <button class="add-cart-btn text-xs">add to cart</button>
        </div>
        <div class="product-box text-center my-2 sm:my-4 border-2 py-4">
          <div class="flex justify-center items-center">
            <div class="product-image">
              <img src="images/redmi note 12.png" alt="A mobile phone" />
            </div>
          </div>
          <div class="product-title text-sm font-normal sm:font-semibold">
            infinix hot 12
          </div>
          <div class="star-box text-center text-xs sm:text-base text-[#FFCF10] my-2 sm:my-4">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <div class="flex justify-between w-20 sm:w-24 mx-auto">
            <div
              class="deal-price my-1 text-xs sm:text-base sm:my-3 font-semibold line-through opacity-50"
            >
              $206
            </div>
            <div class="first-price my-1 text-xs sm:text-base sm:my-3 font-semibold">$136</div>
          </div>
          <button class="add-cart-btn text-xs">add to cart</button>
        </div>
        <div class="product-box text-center my-2 sm:my-4 border-2 py-4">
          <div class="flex justify-center items-center">
            <div class="product-image">
              <img src="images/redmi note 12.png" alt="A mobile phone" />
            </div>
          </div>
          <div class="product-title text-sm font-normal sm:font-semibold">
            infinix hot 12
          </div>
          <div class="star-box text-center text-xs sm:text-base text-[#FFCF10] my-2 sm:my-4">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <div class="flex justify-between w-20 sm:w-24 mx-auto">
            <div
              class="deal-price my-1 text-xs sm:text-base sm:my-3 font-semibold line-through opacity-50"
            >
              $206
            </div>
            <div class="first-price my-1 text-xs sm:text-base sm:my-3 font-semibold">$136</div>
          </div>
          <button class="add-cart-btn text-xs">add to cart</button>
        </div>
      </div>
      </section>
      <script>
        const heroImage = document.querySelector('.master-image img');

        const smallImages = document.querySelectorAll('.small-image img');

        smallImages.forEach((image) => {
        image.onclick = () => {
            heroImage.src = image.src;
        }
        });
      </script>
</x-app-layout>
