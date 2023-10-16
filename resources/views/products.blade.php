<x-app-layout>
    <section class="product-top pt-16 px-[4%] mx-auto lg:max-w-[1500px]">
        <div
        class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
      >
        What we <span class="text-[#68A4FE] px-2">sell</span>
      </div>
        <div class="product-search flex w-full relative my-4">
          <input
            type="search"
            name="search-term"
            placeholder="Search here..."
            class="w-full p-2 sm:p-4 pr-[6rem] sm:pr-32 border-2 rounded-md outline-none focus:border-[#68A4FE] placeholder:text-sm sm:placeholder:text-base text-sm sm:text-base"
          />
          <button
            type="submit"
            class="text-sm sm:text-base absolute  top-1/2 right-2 -translate-y-1/2 bg-[#68A4FE] rounded-md px-4 py-1 sm:py-2 text-white hover:bg-[#384857] transition-all duration-300 ease-in-out capitalize"
          >
            search
          </button>
        </div>
        <div class="category-shopping flex justify-end items-center">
          <div class="category-input flex gap-2 sm:gap-4 items-center">
            <div class="text-sm sm:text-xl font-semibold capitalize text-[#384857]">
              shop by category:
            </div>
            <select
              name="product-category"
              class="outline-none border-2 px-3 sm:px-6 py-1 sm:py-2 rounded-md focus:border-[#68A4FE] text-sm sm:text-base"
            >
              <option value="All">All</option>
              <option value="Phones">Phones</option>
              <option value="Laptops">Laptops</option>
              <option value="Smartwatches">Smartwatches</option>
              <option value="Televisions">Televisions</option>
            </select>
          </div>
        </div>
      </section>
      <!-- The mobile phones section -->
      <section class="phones-section px-[4%] mx-auto lg:max-w-[1500px]">
        <div
          class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
        >mobile phones</div>
        <div class="filter-bar flex justify-between sm:justify-end items-center my-2 sm:my-4">
          <div class="filter-tags space-x-4 capitalize text-xs sm:text-sm">
            <a href="#" class="hover:text-[#68A4FE]">All brands</a>
            <a href="#" class="hover:text-[#68A4FE]">Apple</a>
            <a href="#" class="hover:text-[#68A4FE]">Samsung</a>
            <a href="#" class="hover:text-[#68A4FE]">redmi</a>
          </div>
        </div>
        <div class="top-sales-container grid mx-auto w-[95%] gap-3">
            @forelse ($phones as $phone)
            <a href="{{route('product.page', $phone)}}" class="product-box text-center my-2 sm:my-4 border-2 py-4">
                <div class="flex justify-center items-center">
                <div class="product-image">
                    <img src="{{ asset('/storage/'. $phone->firstImage)}}" alt="A mobile phone" />
                </div>
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
                <button class="add-cart-btn text-xs">add to cart</button>
            </a>
            @empty
            <p>There are no products in the store </p>
            @endforelse
        </div>
      </section>
      <!-- The laptops section -->
      <section class="phones-section px-[4%] mx-auto lg:max-w-[1500px]">
        <div
          class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
        >laptops</div>
        <div class="filter-bar flex justify-between sm:justify-end items-center my-2 sm:my-4">
          <div class="filter-tags space-x-4 capitalize text-xs sm:text-sm">
            <a href="#" class="hover:text-[#68A4FE]">All brands</a>
            <a href="#" class="hover:text-[#68A4FE]">Apple</a>
            <a href="#" class="hover:text-[#68A4FE]">Samsung</a>
            <a href="#" class="hover:text-[#68A4FE]">redmi</a>
          </div>
        </div>
        <div class="top-sales-container grid mx-auto w-[95%] gap-3">
            @forelse ($laptops as $laptop)
            <a href="{{route('product.page', $laptop)}}" class="product-box text-center my-2 sm:my-4 border-2 py-4">
                <div class="flex justify-center items-center">
                <div class="product-image">
                    <img src="{{ asset('/storage/'. $laptop->firstImage)}}" alt="A mobile phone" />
                </div>
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
            </a>
            @empty
            <p>There are no products in the store </p>
            @endforelse
        </div>
      </section>
      <!-- The smartwatches section -->
      <section class="phones-section px-[4%] mx-auto lg:max-w-[1500px]">
        <div
          class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
        >smartwatches</div>
        <div class="filter-bar flex justify-between sm:justify-end items-center my-2 sm:my-4">
          <div class="filter-tags space-x-4 capitalize text-xs sm:text-sm">
            <a href="#" class="hover:text-[#68A4FE]">All brands</a>
            <a href="#" class="hover:text-[#68A4FE]">Apple</a>
            <a href="#" class="hover:text-[#68A4FE]">Samsung</a>
            <a href="#" class="hover:text-[#68A4FE]">redmi</a>
          </div>
        </div>
        <div class="top-sales-container grid mx-auto w-[95%] gap-3">
            @forelse ($smartwatches as $smartwatch)
            <a href="{{route('product.page', $smartwatch)}}" class="product-box text-center my-2 sm:my-4 border-2 py-4">
                <div class="flex justify-center items-center">
                <div class="product-image">
                    <img src="{{ asset('/storage/'. $smartwatch->firstImage)}}" alt="A mobile phone" />
                </div>
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
            </a>
            @empty
            <p>There are no products in the store </p>
            @endforelse
        </div>
      </section>
      <!-- The Televisions section -->
      <section class="phones-section px-[4%] mx-auto lg:max-w-[1500px]">
        <div
          class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
        >televisions</div>
        <div class="filter-bar flex justify-between sm:justify-end items-center my-2 sm:my-4">
          <div class="filter-tags space-x-4 capitalize text-xs sm:text-sm">
            <a href="#" class="hover:text-[#68A4FE]">All brands</a>
            <a href="#" class="hover:text-[#68A4FE]">Apple</a>
            <a href="#" class="hover:text-[#68A4FE]">Samsung</a>
            <a href="#" class="hover:text-[#68A4FE]">redmi</a>
          </div>
        </div>
        <div class="top-sales-container grid mx-auto w-[95%] gap-3">
            @forelse ($televisions as $television)
            <a href="{{route('product.page', $television)}}" class="product-box text-center my-2 sm:my-4 border-2 py-4">
                <div class="flex justify-center items-center">
                <div class="product-image">
                    <img src="{{ asset('/storage/'. $television->firstImage)}}" alt="A mobile phone" />
                </div>
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
            </a>
            @empty
            <p>There are no products in the store </p>
            @endforelse
        </div>
      </section>
</x-app-layout>
