<x-app-layout>
    @foreach ($offerProducts as $offerProduct)
    <section
        class="@if ($loop->iteration == 1)
          bg-[#536474]
          @elseif ($loop->iteration == 2)
          bg-[#28a9c9]
          @elseif ($loop->iteration == 3)
          bg-[#b237be]
          @endif slide @if ($loop->iteration == 1)
          active
          @endif home min-h-screen w-full px-[6%] sm:px-[4%] md:pl-[4%] mx-auto scroll-mt-[100px] lg:max-w-[1500px] flex-col-reverse relative md:flex-row pb-16 md:pb-4">
        <div
          class="@if ($loop->iteration == 1)
          bg-[#536474]
          @elseif ($loop->iteration == 2)
          bg-[#28a9c9]
          @elseif ($loop->iteration == 3)
          bg-[#b237be]
          @endif slide-content basis-2/4 flex justify-center items-start flex-col">
          <h3 class="text-lg sm:text-xl font-semibold text-white capitalize sm:my-4 my-1">
             @if ($offerProduct->category == "Phone")
             mobile ready
             @else
             {{ $offerProduct->category }} ready
             @endif
          </h3>
          <h1 class="text-2xl sm:text-3xl text-white font-semibold my-2 sm:my-4">
            {{ $offerProduct->name }}
          </h1>
          <div class="hero-description text-sm sm:text-base font-normal text-white mb-6">
            @php
                $initialProductDesc = strip_tags($offerProduct->productDescription);
                $shortDesc = explode('|', $initialProductDesc);
            @endphp
            {{ $shortDesc[0] }}
          </div>
          <button class="@if ($loop->iteration == 1)
          bg-[#68A4FE] hover:bg-[#3b81eb]
          @elseif ($loop->iteration == 2)
          bg-[#536474] hover:bg-[#3b81eb]
          @elseif ($loop->iteration == 3)
          bg-[#68A4FE] hover:bg-[#3b81eb]
          @endif shop-btn text-white text-base sm:text-lg font-semibold py-2 sm:py-4 px-8 sm:px-11 rounded-md capitalize cursor-pointer transition-all
           duration-300 ease-in-out">
            shop now
          </button>
          <span class="text-white my-4 block">up to 50% off</span>
        </div>
        <div class="@if ($loop->iteration == 1)
          home-1
          @elseif ($loop->iteration == 2)
          home-2
          @elseif ($loop->iteration == 3)
          home-3
          @endif  slide-image basis-2/4 flex justify-center items-center scale-[0.6] md:scale-100 pt-10">
          <div class="hero-image">
            <img src="{{asset('/storage/'. $offerProduct->firstImage)}}" alt="Hero image" />
          </div>
        </div>
        <div class="progress-container absolute bottom-8 left-1/2 -translate-x-1/2 flex space-x-4">
        @if ($loop->iteration == 1)
         <div class="progress-bar bg-[#68A4FE] h-3 w-10 sm:w-20 rounded-md"></div>
         <div class="progress-bar bg-white h-3 w-10 sm:w-20 rounded-md"></div>
         <div class="progress-bar bg-white h-3 w-10 sm:w-20 rounded-md"></div>
          @elseif ($loop->iteration == 2)
          <div class="progress-bar bg-white  h-3 w-10 sm:w-20 rounded-md"></div>
          <div class="progress-bar bg-[#536474] h-3 w-10 sm:w-20 rounded-md"></div>
          <div class="progress-bar bg-white h-3 w-10 sm:w-20 rounded-md"></div>
          @elseif ($loop->iteration == 3)
          <div class="progress-bar bg-white h-3 w-10 sm:w-20 rounded-md"></div>
          <div class="progress-bar bg-white h-3 w-10 sm:w-20 rounded-md"></div>
          <div class="progress-bar bg-[#68A4FE] h-3 w-10 sm:w-20 rounded-md"></div>
          @endif
        </div>
        <div id="prev" onclick="prev()">&lt</div>
        <div id="next" onclick="next()">&gt</div>
      </section>
    @endforeach
      <!-- The top sales section -->
      <section class="top-sales px-[4%] mx-auto lg:max-w-[1500px]">
        <div
          class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4"
        >
          Top<span class="text-[#68A4FE] px-2">Sales</span>
        </div>
        <div class="top-sales-container grid mx-auto w-[95%]">
            @forelse ($products as $product)
            <div class="product-box text-center my-2 sm:my-4">
              <div class="flex justify-center items-center">
                <a href="{{route('product.page', $product)}}" class="product-image">
                  <img src="{{asset('/storage/'. $product->firstImage)}}" alt="A mobile phone"/>
                </a>
              </div>
              <div class="product-title text-xs font-normal sm:font-semibold">
                {{ $product->name }}
              </div>
                  <div class="star-box text-center text-xs sm:text-base my-2 sm:my-4">
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
                      <i class="fa-solid fa-star text-[#ffcf10]"></i>
                      <i class="fa-solid fa-star text-[#ffcf10]"></i>
                      <i class="fa-solid fa-star text-[#ffcf10]"></i>
                      <i class="fa-solid fa-star text-[#ffcf10]"></i>
                      <i class="fa-solid fa-star text-[#ffcf10]"></i>
                  @endswitch
              </div>
              <div class="first-price my-1 sm:my-3 font-semibold">${{number_format($product->initialPrice)}}</div>
              <button class="add-cart-btn text-xs">add to cart</button>
            </div>
            @empty
            <p>There are no products available</p>
            @endforelse
        </div>
      </section>
      <!-- The products on offer section -->
      <section class="top-sales px-[4%] mx-auto lg:max-w-[1500px]">
        <div
          class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
        >
          on<span class="text-[#68A4FE] px-2">special</span> offer
        </div>
        <div class="filter-bar flex justify-between sm:justify-end items-center my-2 sm:my-4">
          <div class="filter-tags space-x-4 capitalize text-xs sm:text-sm">
            <a class="buttons active hover:text-[#68A4FE] cursor-pointer" data-filter="all">All brands</a>
            <a class="buttons hover:text-[#68A4FE] cursor-pointer" data-filter="apple">Apple</a>
            <a class="buttons hover:text-[#68A4FE] cursor-pointer" data-filter="samsung">Samsung</a>
            <a class="buttons hover:text-[#68A4FE] cursor-pointer" data-filter="redmi">redmi</a>
          </div>
        </div>
        <div class="top-sales-container grid mx-auto w-[95%] gap-3">
        @forelse ($products as $product)
        <div class="filter-product-box text-center my-2 sm:my-4 border-2 py-4" data-item="{{strtolower($product->brandName)}}">
          <div class="flex justify-center items-center">
            <a href="{{route('product.page', $product)}}" class="product-image">
              <img src="{{asset('/storage/'. $product->firstImage)}}" alt="A mobile phone"/>
            </a>
          </div>
          <div class="product-title text-xs font-normal sm:font-semibold">
            {{ $product->name }}
          </div>
              <div class="star-box text-center text-xs sm:text-base my-2 sm:my-4">
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
                  <i class="fa-solid fa-star text-[#ffcf10]"></i>
                  <i class="fa-solid fa-star text-[#ffcf10]"></i>
                  <i class="fa-solid fa-star text-[#ffcf10]"></i>
                  <i class="fa-solid fa-star text-[#ffcf10]"></i>
                  <i class="fa-solid fa-star text-[#ffcf10]"></i>
              @endswitch
          </div>
          <div class="flex justify-between w-20 sm:w-24 mx-auto">
          <div class="deal-price my-1 text-xs sm:text-base sm:my-3 font-semibold line-through opacity-50">
            {{ number_format($product->initialPrice) }}
          </div>
          <div class="first-price my-1 text-xs sm:text-base sm:my-3 font-semibold">{{ number_format($product->discountPrice) }}</div>
        </div>
          <button class="add-cart-btn text-xs">add to cart</button>
        </div>
         @empty
        <p>There are no products available</p>
        @endforelse
        <script>
            const filterButtons = document.querySelectorAll('.filter-tags .buttons');
            const filterProduct = document.querySelectorAll('.filter-product-box');

            filterButtons.forEach(button => {
                button.onclick = () => {
                    filterButtons.forEach(btn => btn.classList.remove("active"));
                    button.classList.add('active');

                    let dataFilter = button.getAttribute('data-filter');

                    filterProduct.forEach(item => {
                        item.classList.remove('active');
                        item.classList.add('hide');

                        if(item.getAttribute('data-item') == dataFilter || dataFilter == 'all'){
                            item.classList.add('active');
                            item.classList.remove('hide');
                        }
                    });
                }
            });


        </script>
        </div>
        <div class="offer-container flex my-4 sm:my-8 gap-6 flex-col sm:flex-row">
            @php
                $productsOnOffer = collect([]);
                foreach ($products as $key => $value) {
                    if($value->name == 'Dell Inspiron' || $value->name == 'xiaomi redmi note 10'){
                        $productsOnOffer->push($value);
                    };
                }
            @endphp
            @forelse ($productsOnOffer as $product)
          <div class="offer-box bg-[#ECEEEF] flex flex-col md:flex-row gap-1 md:gap-2 items-center basis-[48%] py-4 px-4 md:p-2">
          <a href="{{route('product.page', $product)}}" class="basis-[48%] px-3 sm:px-0">
            <img src="{{asset('/storage/'. $product->firstImage)}}" alt="A product on offer" class=" scale-50 object-cover md:scale-100"/>
          </a>
          <div class="content">
            <div class="content-head font-bold capitalize">
                <div class="basis-[48%] content-head text-xs sm:text-sm">
                @if ($product->name === 'Dell Inspiron')
                <span class="pr-2 text-[#68A4FE] text-sm sm:text-base">50% discount</span>Plus free
                gift
                @else
                <span class="pr-2 text-[#68A4FE] text-sm sm:text-base">50% discount</span>Plus free
                shipping
                @endif
                </div>
            </div>
            @if ($product->name === 'xiaomi redmi note 10')
            <div class="basis-[48%] content-head text-xs sm:text-sm">
              This applies to all new releases of Xiaomi Redmi 10 for a
              limited amount of time
            </div>
            @else
            <div class="basis-[48%] content-head text-xs sm:text-sm">
                This applies to all new releases of Dell inspiron laptops
              </div>
            @endif
          </div>
          </div>
          @empty
          <p>There are no products available on offer</p>
          @endforelse
        </div>
      </section>
      <!-- The new arrivals section -->
      <section class="top-sales px-[4%] mx-auto lg:max-w-[1500px]">
        <div class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize">
          new<span class="text-[#68A4FE] px-2">Arrivals</span>
        </div>
        <div class="top-sales-container grid mx-auto w-[95%]">
        @forelse ($newArrivals as $product)
            <div class="product-box text-center my-2 sm:my-4">
              <div class="flex justify-center items-center">
                <a href="{{route('product.page', $product)}}" class="product-image">
                  <img src="{{asset('/storage/'. $product->firstImage)}}" alt="A mobile phone"/>
                </a>
              </div>
              <div class="product-title text-xs font-normal sm:font-semibold">
                {{ $product->name }}
              </div>
                  <div class="star-box text-center text-xs sm:text-base my-2 sm:my-4">
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
                      <i class="fa-solid fa-star text-[#ffcf10]"></i>
                      <i class="fa-solid fa-star text-[#ffcf10]"></i>
                      <i class="fa-solid fa-star text-[#ffcf10]"></i>
                      <i class="fa-solid fa-star text-[#ffcf10]"></i>
                      <i class="fa-solid fa-star text-[#ffcf10]"></i>
                  @endswitch
              </div>
              <div class="first-price my-1 sm:my-3 font-semibold">${{number_format($product->initialPrice)}}</div>
              <button class="add-cart-btn text-xs">add to cart</button>
            </div>
            @empty
            <p>There are no products available</p>
            @endforelse
        </div>
      </section>
</x-app-layout>
