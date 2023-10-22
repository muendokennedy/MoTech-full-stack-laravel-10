<x-app-layout>
    @php
        if(request()->query('phone')){
            $laptops = null;
            $smartwatches = null;
            $televisions = null;
        } else if(request()->query('laptop')){
            $phones = null;
            $smartwatches = null;
            $televisions = null;
        } else if(request()->query('smartwatch')){
            $phones = null;
            $laptops = null;
            $televisions = null;
        } else if(request()->query('television')){
            $phones = null;
            $laptops = null;
            $smartwatches = null;
        }
    @endphp
    <section class="product-top pt-16 px-[4%] mx-auto lg:max-w-[1500px]">
        <div
        class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
      >
        What we <span class="text-[#68A4FE] px-2">sell</span>
      </div>
      <form action="{{route('products')}}">
        <div class="product-search flex w-full relative my-4">
          <input
            type="search"
            name="search"
            value="{{request('search')}}"
            placeholder="Search here... eg, phone, laptop, smartwatch, television or specific product name or even brandname"
            class="w-full p-2 sm:p-4 pr-[6rem] sm:pr-32 border-2 rounded-md outline-none focus:border-[#68A4FE] placeholder:text-sm sm:placeholder:text-base text-sm sm:text-base"
            autofocus/>
          <button
            type="submit"
            class="text-sm sm:text-base absolute  top-1/2 right-2 -translate-y-1/2 bg-[#68A4FE] rounded-md px-4 py-1 sm:py-2 text-white hover:bg-[#384857] transition-all duration-300 ease-in-out capitalize"
          >
            search
          </button>
        </div>
    </form>
      </section>
      <!-- The mobile phones section -->
      @if(($phones && $phones->count() !== 0))
      <section class="phones-section px-[4%] mx-auto lg:max-w-[1500px]">
            <div class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
            >mobile phones</div>
            <div class="filter-bar flex justify-between sm:justify-end items-center my-2 sm:my-4">
              <div class="filter-tags space-x-4 capitalize text-xs sm:text-sm">
                <a href="{{route('products', ['phone' => 'all'])}}" class="hover:text-[#68A4FE]">All brands</a>
                <a href="{{route('products', ['phone' => 'Apple'])}}" class="hover:text-[#68A4FE]">Apple</a>
                <a href="{{route('products', ['phone' => 'Samsung'])}}" class="hover:text-[#68A4FE]">Samsung</a>
                <a href="{{route('products', ['phone' => 'Redmi'])}}" class="hover:text-[#68A4FE]">redmi</a>
                <a href="{{route('products', ['phone' => 'Tecno'])}}" class="hover:text-[#68A4FE]">tecno</a>
              </div>
            </div>
            <div class="top-sales-container grid mx-auto w-[95%] gap-3">
                @forelse ($phones as $phone)
                <div class="product-box text-center my-2 sm:my-4 border-2 py-4">
                    <div class="flex justify-center items-center">
                    <a href="{{route('product.page', $phone)}}" class="product-image">
                        <img src="{{ asset('/storage/'. $phone->firstImage)}}" alt="A mobile phone" />
                    </a>
                    </div>
                    <div class="product-title text-xs font-normal sm:font-semibold">
                        {{ $phone->productName }}
                    </div>
                    <div class="star-box text-center text-xs sm:text-base my-2 sm:my-4">
                  @switch($phone->avgRating)
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
                    <div class="flex justify-between w-20 sm:w-24 mx-auto">
                    <div class="deal-price my-1 text-xs sm:text-base sm:my-3 font-semibold line-through opacity-50">${{ $phone->initialPrice }}</div>
                    <div class="first-price my-1 text-xs sm:text-base sm:my-3 font-semibold">${{$phone->discountPrice}}</div>
                    </div>
                    <button class="add-cart-btn text-xs" onclick="addToCart({{$phone->id}})">add to cart</button>
                </div>
                @empty
                <p>There are no products in the store </p>
                @endforelse
            </div>
      </section>
      @endif
            <!-- script to send the AJAX Request to server -->
            <script type="text/javascript">
              function addToCart(product_id){
                // Get the data
                const productId = {
                  id: product_id
                };

                console.log(JSON.stringify(productId));

                console.log(document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
                // Create an AJAX Request
                const xhrHttp = new XMLHttpRequest();
                let targetUrl = "{{ route('add.cart') }}";

                xhrHttp.open('POST', targetUrl, true);
                xhrHttp.setRequestHeader('Content-Type', 'application/json');
                xhrHttp.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

                xhrHttp.onreadystatechange = function () {
                    if(xhrHttp.readyState === 4 && xhrHttp.status === 200){
                        let response = JSON.parse(xhrHttp.responseText);
                        console.log(response);
                    } else if(xhrHttp.readyState === 4){
                        console.log('There was an error in making the request');
                    }
                };
                xhrHttp.send(JSON.stringify(productId));
              }
            </script>
      <!-- The laptops section -->
      @if (($laptops && $laptops->count() !== 0))
      <section class="phones-section px-[4%] mx-auto lg:max-w-[1500px]">
        <div
          class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
        >laptops</div>
        <div class="filter-bar flex justify-between sm:justify-end items-center my-2 sm:my-4">
          <div class="filter-tags space-x-4 capitalize text-xs sm:text-sm">
                <a href="{{route('products', ['laptop' => 'all'])}}" class="hover:text-[#68A4FE]">All brands</a>
                <a href="{{route('products', ['laptop' => 'Apple'])}}" class="hover:text-[#68A4FE]">Apple</a>
                <a href="{{route('products', ['laptop' => 'Samsung'])}}" class="hover:text-[#68A4FE]">Samsung</a>
                <a href="{{route('products', ['laptop' => 'HP'])}}" class="hover:text-[#68A4FE]">HP</a>
                <a href="{{route('products', ['laptop' => 'Dell'])}}" class="hover:text-[#68A4FE]">Dell</a>
          </div>
        </div>
        <div class="top-sales-container grid mx-auto w-[95%] gap-3">
            @forelse ($laptops as $laptop)
            <div class="product-box text-center my-2 sm:my-4 border-2 py-4">
                <div class="flex justify-center items-center">
                <a href="{{route('product.page', $laptop)}}" class="product-image">
                    <img src="{{ asset('/storage/'. $laptop->firstImage)}}" alt="A mobile phone" />
                </a>
                </div>
                <div class="product-title text-xs font-normal sm:font-semibold">
                    {{ $laptop->productName }}
                </div>
                <div class="star-box text-center text-xs sm:text-base my-2 sm:my-4">
              @switch($laptop->avgRating)
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
                <div class="flex justify-between w-20 sm:w-24 mx-auto">
                <div class="deal-price my-1 text-xs sm:text-base sm:my-3 font-semibold line-through opacity-50">${{ $laptop->initialPrice }}</div>
                <div class="first-price my-1 text-xs sm:text-base sm:my-3 font-semibold">${{$laptop->discountPrice}}</div>
                </div>
                <button class="add-cart-btn text-xs">add to cart</button>
            </div>
            @empty
            <p>There are no products in the store </p>
            @endforelse
        </div>
      </section>
      @endif
      <!-- The smartwatches section -->
      @if(($smartwatches && $smartwatches->count() !== 0))
      <section class="phones-section px-[4%] mx-auto lg:max-w-[1500px]">
        <div
          class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
        >smartwatches</div>
        <div class="filter-bar flex justify-between sm:justify-end items-center my-2 sm:my-4">
          <div class="filter-tags space-x-4 capitalize text-xs sm:text-sm">
                <a href="{{route('products', ['smartwatch' => 'all'])}}" class="hover:text-[#68A4FE]">All brands</a>
                <a href="{{route('products', ['smartwatch' => 'Apple'])}}" class="hover:text-[#68A4FE]">Apple</a>
                <a href="{{route('products', ['smartwatch' => 'Samsung'])}}" class="hover:text-[#68A4FE]">Samsung</a>
                <a href="{{route('products', ['smartwatch' => 'Oraimo'])}}" class="hover:text-[#68A4FE]">Oraimo</a>
                <a href="{{route('products', ['smartwatch' => 'Huawei'])}}" class="hover:text-[#68A4FE]">Huawei</a>
          </div>
        </div>
        <div class="top-sales-container grid mx-auto w-[95%] gap-3">
            @forelse ($smartwatches as $smartwatch)
            <div class="product-box text-center my-2 sm:my-4 border-2 py-4">
                <div class="flex justify-center items-center">
                <a href="{{route('product.page', $smartwatch)}}" class="product-image">
                    <img src="{{ asset('/storage/'. $smartwatch->firstImage)}}" alt="A mobile phone" />
                </a>
                </div>
                <div class="product-title text-xs font-normal sm:font-semibold">
                    {{ $smartwatch->productName }}
                </div>
                <div class="star-box text-center text-xs sm:text-base my-2 sm:my-4">
              @switch($smartwatch->avgRating)
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
                <div class="flex justify-between w-20 sm:w-24 mx-auto">
                <div class="deal-price my-1 text-xs sm:text-base sm:my-3 font-semibold line-through opacity-50">${{ $smartwatch->initialPrice }}</div>
                <div class="first-price my-1 text-xs sm:text-base sm:my-3 font-semibold">${{$smartwatch->discountPrice}}</div>
                </div>
                <button class="add-cart-btn text-xs">add to cart</button>
            </div>
            @empty
            <p>There are no products in the store </p>
            @endforelse
        </div>
      </section>
      @endif
      <!-- The Televisions section -->
      @if ($televisions && $televisions->count() !== 0)
      <section class="phones-section px-[4%] mx-auto lg:max-w-[1500px]">
        <div
          class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
        >televisions</div>
        <div class="filter-bar flex justify-between sm:justify-end items-center my-2 sm:my-4">
          <div class="filter-tags space-x-4 capitalize text-xs sm:text-sm">
                <a href="{{route('products', ['television' => 'all'])}}" class="hover:text-[#68A4FE]">All brands</a>
                <a href="{{route('products', ['television' => 'Sony'])}}" class="hover:text-[#68A4FE]">Sony</a>
                <a href="{{route('products', ['television' => 'Samsung'])}}" class="hover:text-[#68A4FE]">Samsung</a>
                <a href="{{route('products', ['television' => 'LG'])}}" class="hover:text-[#68A4FE]">LG</a>
                <a href="{{route('products', ['television' => 'TCL'])}}" class="hover:text-[#68A4FE]">TCL</a>
          </div>
        </div>
        <div class="top-sales-container grid mx-auto w-[95%] gap-3">
            @forelse ($televisions as $television)
            <div class="product-box text-center my-2 sm:my-4 border-2 py-4">
                <div class="flex justify-center items-center">
                <a href="{{route('product.page', $television)}}" class="product-image">
                    <img src="{{ asset('/storage/'. $television->firstImage)}}" alt="A mobile phone" />
                </a>
                </div>
                <div class="product-title text-xs font-normal sm:font-semibold">
                    {{ $television->productName }}
                </div>
                <div class="star-box text-center text-xs sm:text-base my-2 sm:my-4">
              @switch($television->avgRating)
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
                <div class="flex justify-between w-20 sm:w-24 mx-auto">
                <div class="deal-price my-1 text-xs sm:text-base sm:my-3 font-semibold line-through opacity-50">${{ $television->initialPrice }}</div>
                <div class="first-price my-1 text-xs sm:text-base sm:my-3 font-semibold">${{$television->discountPrice}}</div>
                </div>
                <button class="add-cart-btn text-xs">add to cart</button>
            </div>
            @empty
            <p>There are no products in the store </p>
            @endforelse
        </div>
      </section>
      @endif
      @if (($phones !== null && $phones->count() === 0) && ($laptops !== null && $laptops->count() === 0) && ($smartwatches !== null && $smartwatches->count() === 0) && ($televisions !== null && $televisions->count() === 0))
      <section class="phones-section px-[4%] mx-auto lg:max-w-[1500px]">
          <p>No products found!</p>
      </section>
      @endif
</x-app-layout>
