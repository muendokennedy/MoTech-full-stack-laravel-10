<x-app-layout>
    <section class="shopping-cart mx-auto pt-16 px-[4%] lg:max-w-[1500px]">
        <div
        class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
      >
        shopping<span class="text-[#68A4FE] px-2"> cart</span>
      </div>
        <div class="cart-section flex flex-col lg:flex-row justify-between w-full">
          <div class="shopping-cart-container text-[#384857] w-full lg:w-[65%]">
            @forelse ($carts as $cart)
            <div class="shopping-cart-box flex flex-col sm:flex-row justify-between items-center sm:items-start p-4 h-auto sm:h-56 w-full border-b-2 my-4">
              <div class="cart-image h-full w-32 md:w-44">
                <img
                  src="{{ asset('/storage/'. $cart->product->firstImage)}}"
                  alt="A cart item"
                  class="md:-translate-y-4 h-auto scale-50 sm:h-full"
                />
              </div>
              <div class="cart-info h-full flex flex-col justify-between">
                <div class="space-y-2">
                  <div class="product-name font-semibold text-base sm:text-lg capitalize">
                  {{ $cart->product->productName }}
                  </div>
                  <div class="product-text text-sm capitalize">{{ $cart->product->brandName }}</div>
                  <div class="rating-box flex gap-2 items-center">
                    <div class="star-box text-center text-xs my-2 sm:my-4">
                    @switch($cart->product->avgRating)
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
                    <div class="rating-text text-xs text-[#68A4FE]">
                      100,450 Ratings
                    </div>
                  </div>
                </div>
                <div class="quantity-box mt-4 sm:mt-0 flex gap-4 items-center">
                  <i onclick="increaseProductQty(this, '{{$cart->product->id}}')" class="quantity-increment fa-solid fa-plus font-bold text-sm md:text-xl p-0 md:p-1 cursor-pointer hover:text-[#68a4fe] transition-all duration-300 ease-in-out"></i>
                  <input type="text" name="" id=""  value="1" data-content="{{$cart->product->id}}" class="product-qty p-1 md:p-2 border-2 rounded-md outline-none w-14 md:w-16 text-center"/>
                  <i onclick="decreaseProductQty(this, '{{$cart->product->id}}')" class="quantity-decrement fa-solid fa-minus font-bold text-sm md:text-xl p-0 md:p-1 cursor-pointer hover:text-[#68a4fe] transition-all duration-300 ease-in-out"></i>
                </div>
              </div>
              <div class="action-box h-full flex flex-col justify-between">
                <div class="product-price self-end text-[#FF412C] text-sm font-bold">
                ${{ $cart->product->discountPrice }}
                </div>
                <div class="action-button mt-4 sm:mt-0 flex items-center gap-4">
                  <button type="submit" class="text-xs sm:text-sm px-4 py-2 bg-[#ffcf10] rounded-md text-center">
                    Remove
                  </button>
                  <button type="submit"class="text-xs sm:text-sm px-4 py-2 bg-[#68a4fe] rounded-md text-white text-center">
                    Save for later
                  </button>
                </div>
              </div>
            </div>
            @empty
            <p class="my-8 text-base sm:text-lg">There are no products in the cart!</p>
            @endforelse
          </div>
          <!-- A script to increase and decrease the quantiy -->
          <script>
            let currentValue = document.querySelectorAll('.product-qty');

            function getValueAfterRefresh(){
                currentValue.forEach((current => {
                let id = current.getAttribute('data-content');
                if(localStorage.getItem(id)){
                    current.value = localStorage.getItem(id);
                }
              }));
            }

            getValueAfterRefresh();
            function increaseProductQty(product, id){
              if(product.nextElementSibling.value != 10){
                product.nextElementSibling.value++;
                let productPrice = subtotalPrice(product);
                let subTotal = document.querySelector('.subtotal-price').innerText.replace('$', '');
                let newSubtotal = Number.parseInt(productPrice) + Number.parseInt(subTotal);
                localStorage.setItem('Subtotal', newSubtotal)
                document.querySelector('.subtotal-price').innerText =`$ ${localStorage.getItem(Subtotal)}`;
                storeQuantityValue1(id, product);
                getQuantityValue1(id, product);
              }
            }
            function decreaseProductQty(product, id){
                if(product.previousElementSibling.value != 1){
                product.previousElementSibling.value--;
                let productPrice = subtotalPrice(product);
                let subTotal = document.querySelector('.subtotal-price').innerText.replace('$', '');
                let newSubtotal = Number.parseInt(subTotal) - Number.parseInt(productPrice);
                localStorage.setItem('Subtotal', newSubtotal);
                document.querySelector('.subtotal-price').innerText =`$ ${localStorage.getItem(Subtotal)}`;
                storeQuantityValue2(id, product);
                getQuantityValue2(id, product);
              }
            }
            function subtotalPrice(price){
              let currentPrice = price.parentElement.parentElement.parentElement.querySelector('.product-price').innerText.replace('$', '');
              return currentPrice;
            }
            function storeQuantityValue1(productId, plus){
              console.log(productId);
              localStorage.setItem(productId, plus.nextElementSibling.value);
            }
            function getQuantityValue1(productId, plus){
              console.log(productId);
              if(!localStorage.getItem(productId)){
                plus.nextElementSibling.value = 1
              } else {
                plus.nextElementSibling.value = localStorage.getItem(productId);
              }
            }
            function storeQuantityValue2(productId, minus){
              console.log(productId);
              localStorage.setItem(productId, minus.previousElementSibling.value);
            }
            function getQuantityValue2(productId, minus){
              console.log(productId);
              if(!localStorage.getItem(productId)){
                minus.previousElementSibling.value = 1
              } else {
                minus.previousElementSibling.value = localStorage.getItem(productId);
              }
            }
            // document.querySelector('.subtotal-price').innerText =`$ ${newSubtotal}`;
          </script>
          <div class="cart-total border-2 h-52 sm:h-56 lg:h-64 xl:h-56 w-full md:w-3/5 lg:w-1/3 my-2">
            <h2
              class="cart-total-title capitalize border-b-2 px-1 py-4 text-center space-x-2 sm:space-x-4 text-base sm:text-xl font-semibold text-[#009F25]"
            >
              <i class="fa-solid fa-check font-extrabold text-base"></i>
              <span class="text-base">order eligibe for free Delivery</span>
            </h2>
            <div class="cart-total-content flex flex-col gap-4 p-2">
              <div class="content-title space-y-2">
                <h2 class="p-2 text-sm sm:text-base capitalize text-[#384857] font-semibold">
                  subtotal({{ ($carts->count() === 1) ? "{$carts->count()} item" : "{$carts->count()} items" }}):
                </h2>
                @php
                  $subtotal = collect([]);
                  foreach($carts as $cart){
                    $subtotal->push($cart->product->discountPrice);
                  }
                @endphp
                <div class="subtotal-price price px-2 text-[#FF412C] text-sm sm:text-base font-semibold">
                  ${{ $subtotal->sum() }}
                </div>
              </div>
              <a  href="{{route('customer.login')}}"
                class="text-sm self-end px-4 py-2 bg-[#ffcf10] rounded-md text-center"
              >
                Proceed to checkout
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="shopping-cart mx-auto px-[4%] lg:max-w-[1500px]">
        <div
        class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
      >
        wishlist
      </div>
        <div class="cart-section">
          <div class="shopping-cart-container text-[#384857] w-full lg:w-5/6">
            <div
            class="shopping-cart-box flex flex-col sm:flex-row justify-between items-center sm:items-start p-4 h-auto sm:h-48 w-full border-b-2 my-4"
          >
            <div class="cart-image h-full">
              <img
                src="images/redmi note 12.png"
                alt="A cart item"
                class="md:-translate-y-4 h-auto scale-50 sm:scale-100 sm:h-full"
              />
            </div>
            <div class="cart-info h-full flex flex-col justify-between">
              <div class="space-y-2">
                <div class="product-name font-semibold text-base sm:text-xl capitalize">
                  redmi note 12
                </div>
                <div class="product-text text-sm">From redmi</div>
                <div class="rating-box flex gap-2 items-center">
                  <div class="star-box text-sm text-[#FFCF10]">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  <div class="rating-text text-xs text-[#68A4FE]">
                    100,450 Ratings
                  </div>
                </div>
              </div>
              <div class="quantity-box mt-4 sm:mt-0 flex gap-4 items-center">
                <i
                  class="fa-solid fa-plus text-xl p-1 cursor-pointer hover:text-[#68a4fe] transition-all duration-300 ease-in-out"
                ></i>
                <input
                  type="number"
                  name=""
                  id=""
                  class="p-2 border-2 rounded-md outline-none w-24"
                />
                <i
                  class="fa-solid fa-minus text-xl p-1 cursor-pointer hover:text-[#68a4fe] transition-all duration-300 ease-in-out"
                ></i>
              </div>
            </div>
            <div class="action-box h-full flex flex-col justify-between">
              <div
                class="product-price self-end text-[#FF412C] text-lg font-normal"
              >
                $316
              </div>
              <div class="action-button mt-4 sm:mt-0 flex items-center gap-4">
                <button
                  type="submit"
                  class="px-4 py-2 bg-[#ffcf10] rounded-md text-white text-center"
                >
                  Remove
                </button>
                <button
                  type="submit"
                  class="px-4 py-2 bg-[#68a4fe] rounded-md text-white text-center"
                >
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div
            class="shopping-cart-box flex flex-col sm:flex-row justify-between items-center sm:items-start p-4 h-auto sm:h-48 w-full border-b-2 my-4"
          >
            <div class="cart-image h-full">
              <img
                src="images/redmi note 12.png"
                alt="A cart item"
                class="md:-translate-y-4 h-auto scale-50 sm:scale-100 sm:h-full"
              />
            </div>
            <div class="cart-info h-full flex flex-col justify-between">
              <div class="space-y-2">
                <div class="product-name font-semibold text-base sm:text-xl capitalize">
                  redmi note 12
                </div>
                <div class="product-text text-sm">From redmi</div>
                <div class="rating-box flex gap-2 items-center">
                  <div class="star-box text-sm text-[#FFCF10]">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  <div class="rating-text text-xs text-[#68A4FE]">
                    100,450 Ratings
                  </div>
                </div>
              </div>
              <div class="quantity-box mt-4 sm:mt-0 flex gap-4 items-center">
                <i
                  class="fa-solid fa-plus text-xl p-1 cursor-pointer hover:text-[#68a4fe] transition-all duration-300 ease-in-out"
                ></i>
                <input
                  type="number"
                  name=""
                  id=""
                  class="p-2 border-2 rounded-md outline-none w-24"
                />
                <i
                  class="fa-solid fa-minus text-xl p-1 cursor-pointer hover:text-[#68a4fe] transition-all duration-300 ease-in-out"
                ></i>
              </div>
            </div>
            <div class="action-box h-full flex flex-col justify-between">
              <div
                class="product-price self-end text-[#FF412C] text-lg font-normal"
              >
                $316
              </div>
              <div class="action-button mt-4 sm:mt-0 flex items-center gap-4">
                <button
                  type="submit"
                  class="px-4 py-2 bg-[#ffcf10] rounded-md text-white text-center"
                >
                  Remove
                </button>
                <button
                  type="submit"
                  class="px-4 py-2 bg-[#68a4fe] rounded-md text-white text-center"
                >
                Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div
            class="shopping-cart-box flex flex-col sm:flex-row justify-between items-center sm:items-start p-4 h-auto sm:h-48 w-full border-b-2 my-4"
          >
            <div class="cart-image h-full">
              <img
                src="images/redmi note 12.png"
                alt="A cart item"
                class="md:-translate-y-4 h-auto scale-50 sm:scale-100 sm:h-full"
              />
            </div>
            <div class="cart-info h-full flex flex-col justify-between">
              <div class="space-y-2">
                <div class="product-name font-semibold text-base sm:text-xl capitalize">
                  redmi note 12
                </div>
                <div class="product-text text-sm">From redmi</div>
                <div class="rating-box flex gap-2 items-center">
                  <div class="star-box text-sm text-[#FFCF10]">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  <div class="rating-text text-xs text-[#68A4FE]">
                    100,450 Ratings
                  </div>
                </div>
              </div>
              <div class="quantity-box mt-4 sm:mt-0 flex gap-4 items-center">
                <i
                  class="fa-solid fa-plus text-xl p-1 cursor-pointer hover:text-[#68a4fe] transition-all duration-300 ease-in-out"
                ></i>
                <input
                  type="number"
                  name=""
                  id=""
                  class="p-2 border-2 rounded-md outline-none w-24"
                />
                <i
                  class="fa-solid fa-minus text-xl p-1 cursor-pointer hover:text-[#68a4fe] transition-all duration-300 ease-in-out"
                ></i>
              </div>
            </div>
            <div class="action-box h-full flex flex-col justify-between">
              <div
                class="product-price self-end text-[#FF412C] text-lg font-normal"
              >
                $316
              </div>
              <div class="action-button mt-4 sm:mt-0 flex items-center gap-4">
                <button
                  type="submit"
                  class="px-4 py-2 bg-[#ffcf10] rounded-md text-white text-center"
                >
                  Remove
                </button>
                <button
                  type="submit"
                  class="px-4 py-2 bg-[#68a4fe] rounded-md text-white text-center"
                >
                Add to Cart
                </button>
              </div>
            </div>
          </div>
          </div>
        </div>
      </section>
      <section class="shopping-cart mx-auto px-[4%] lg:max-w-[1500px]">
        <div
        class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
      >
        you may also<span class="text-[#68A4FE] px-2"> like</span>
      </div>
      <div class="top-sales-container grid mx-auto w-[95%]">
        <div class="product-box text-center my-2 sm:my-4">
          <div class="flex justify-center items-center">
            <div class="product-image">
              <img src="images/redmi note 12.png" alt="A mobile phone"/>
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
          <div class="first-price my-1 sm:my-3 font-semibold">$136</div>
          <button class="add-cart-btn text-xs">add to cart</button>
        </div>
        <div class="product-box text-center my-2 sm:my-4">
          <div class="flex justify-center items-center">
            <div class="product-image">
              <img src="images/redmi note 12.png" alt="A mobile phone"/>
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
          <div class="first-price my-1 sm:my-3 font-semibold">$136</div>
          <button class="add-cart-btn text-xs">add to cart</button>
        </div>
        <div class="product-box text-center my-2 sm:my-4">
          <div class="flex justify-center items-center">
            <div class="product-image">
              <img src="images/redmi note 12.png" alt="A mobile phone"/>
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
          <div class="first-price my-1 sm:my-3 font-semibold">$136</div>
          <button class="add-cart-btn text-xs">add to cart</button>
        </div>
        <div class="product-box text-center my-2 sm:my-4">
          <div class="flex justify-center items-center">
            <div class="product-image">
              <img src="images/redmi note 12.png" alt="A mobile phone"/>
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
          <div class="first-price my-1 sm:my-3 font-semibold">$136</div>
          <button class="add-cart-btn text-xs">add to cart</button>
        </div>
        <div class="product-box text-center my-2 sm:my-4">
          <div class="flex justify-center items-center">
            <div class="product-image">
              <img src="images/redmi note 12.png" alt="A mobile phone"/>
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
          <div class="first-price my-1 sm:my-3 font-semibold">$136</div>
          <button class="add-cart-btn text-xs">add to cart</button>
        </div>
      </div>
      </section>
</x-app-layout>
