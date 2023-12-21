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
    <section class="shopping-cart mx-auto pt-16 px-[4%] lg:max-w-[1500px]">
        <div
        class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
      >
        shopping<span class="text-[#68A4FE] px-2"> cart</span>
      </div>
      <div class="product-removecart-confirm bg-green-200 rounded-md py-2 px-4 w-1/2 m-auto fixed top-1/3 left-1/2 -translate-x-1/2 z-50 hidden">
        <div onclick="this.parentElement.style.display = 'none'" class="addcart-close text-2xl absolute right-2 top-0"><i class="fa-solid fa-times p-2 cursor-pointer font-bold"></i></div>
        <p class="text-green-700 mt-6 mb-4">
            @auth('web')
              {{$firstCustomerName}}
            @endauth, <span></span>
        </p>
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
                  <input type="text" name="" id="" oninput="changeProductQty(this, '{{$cart->product->id}}')"  value="1" data-content="{{$cart->product->id}}" class="product-qty p-1 md:p-2 border-2 rounded-md outline-none w-14 md:w-16 text-center"/>
                  <i onclick="decreaseProductQty(this, '{{$cart->product->id}}')" class="quantity-decrement fa-solid fa-minus font-bold text-sm md:text-xl p-0 md:p-1 cursor-pointer hover:text-[#68a4fe] transition-all duration-300 ease-in-out"></i>
                </div>
              </div>
              <div class="action-box h-full flex flex-col justify-between">
                <div class="product-price self-end text-[#FF412C] text-sm font-bold">
                ${{ $cart->product->discountPrice }}
                </div>
                <div class="action-button mt-4 sm:mt-0 flex items-center gap-4">
                  <button type="submit" class="text-xs sm:text-sm px-4 py-2 bg-[#ffcf10] rounded-md text-center" onclick="removeCartItem('{{$cart->product->id}}', '{{$cart->product->discountPrice}}')">
                    Remove
                  </button>
                  <button type="submit"class="text-xs sm:text-sm px-4 py-2 bg-[#68a4fe] rounded-md text-white text-center" onclick="addToWishlist('{{$cart->product->id}}')">
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
              const productCartAlertMoodle = document.querySelector('.product-removecart-confirm');
              const moodleText = productCartAlertMoodle.querySelector('span');

            let currentValue = document.querySelectorAll('.product-qty');

            function getValueAfterRefresh(value){
                value.forEach((current => {
                    let id = current.getAttribute('data-content');
                    console.log(localStorage.getItem(id));
                if(localStorage.getItem(id)){
                    current.value = localStorage.getItem(id);
                }
              }));
            }

            getValueAfterRefresh(currentValue);

            function increaseProductQty(product, id){
              if(product.nextElementSibling.value != 10){
                product.nextElementSibling.value++;
                  let productPrice = subtotalPrice(product);
                  console.log(product.nextElementSibling.value);
                  let newPrice = Number.parseInt(product.nextElementSibling.value) * Number.parseInt(productPrice);
                  let subTotal = document.querySelector('.subtotal-price').innerText.replace('$', '');
                  let newSubtotal = newPrice + Number.parseInt(subTotal) - (productPrice * (Number.parseInt(product.nextElementSibling.value) - 1));
                  localStorage.setItem('subtotal', newSubtotal);
                    console.log(localStorage.getItem('subtotal'));
                document.querySelector('.subtotal-price').innerText =`$ ${localStorage.getItem('subtotal')}`;
                storeQuantityValue1(id, product);
                getQuantityValue1(id, product);
              }
            }
            function decreaseProductQty(product, id){
                if(product.previousElementSibling.value != 1){
                  product.previousElementSibling.value--;
                  let productPrice = subtotalPrice(product);
                  console.log(product.previousElementSibling.value);
                  let newPrice = Number.parseInt(productPrice);
                  let subTotal = localStorage.getItem('subtotal');
                  let newSubtotal =  Number.parseInt(subTotal) - newPrice;
                  localStorage.setItem('subtotal', newSubtotal);
                  document.querySelector('.subtotal-price').innerText =`$ ${localStorage.getItem('subtotal')}`;
                  storeQuantityValue2(id, product);
                  getQuantityValue2(id, product);
              }
            }
            function subtotalPrice(price){
              let currentPrice = price.parentElement.parentElement.parentElement.querySelector('.product-price').innerText.replace('$', '');
              console.log(currentPrice);
              return currentPrice;
            }
            function changeProductQty(product, id){
              if(product.value > 1 && !localStorage.getItem(id)){
                product.value = 1;
              } else{
                product.value = localStorage.getItem(id);
              }
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
                minus.previousElementSibling.value = 1;
              } else {
                minus.previousElementSibling.value = localStorage.getItem(productId);
              }
            }



            // Sending a AJAX request to remove an item from cart
            function removeCartItem(product_id, product_price){
                // Get the data
                const productId = {
                    id: product_id
                };


                // Create an AJAX request
                const xhrHttp = new XMLHttpRequest();

                let targetUrl = "{{ route('remove.cart') }}";

                xhrHttp.open('POST', targetUrl, true);
                xhrHttp.setRequestHeader('Content-Type', 'application/json');
                xhrHttp.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

                xhrHttp.onreadystatechange = function(){
                    if(xhrHttp.readyState === 4 && xhrHttp.status === 200){
                        let response = JSON.parse(xhrHttp.responseText);
                        if(response.status === 'login to continue'){
                            location.href = '/login/customer';
                        } else if(response.status === 'The product has been removed from the cart!'){
                            productCartAlertMoodle.style.display = 'block';
                            moodleText.textContent = response.status;
                            setTimeout(() => {
                              productCartAlertMoodle.style.display = 'none';
                            }, 8000);
                            modifySubtotal(product_id, product_price);
                            location.reload();
                    }  else if(xhrHttp.readyState === 4){
                        console.log('There was an error making the requst to remove this item frm the cart');
                    }
                }
            }
            xhrHttp.send(JSON.stringify(productId));
        }
        function modifySubtotal(id, price){
                // let subTotal = localStorage.getItem('subtotal');
                localStorage.clear();
                // localStorage.removeItem('subtotal');
                // let productPrice, productQty;
                // if(localStorage.getItem(id)){
                //     productQty = localStorage.getItem(id);
                //     console.log(price);
                //     productPrice = Number.parseInt(price) * Number.parseInt(productQty);
                // } else {
                //     productPrice = Number.parseInt(price);
                // }
                // let newSubtotal =  Number.parseInt(subTotal) - productPrice;
                // localStorage.setItem('subtotal', newSubtotal);
                // if(localStorage.getItem('subtotal') ===  productPrice){
                //     localStorage.removeItem('subtotal');
                // }
                // localStorage.removeItem(id);
            }
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
                <div class="subtotal-holder hidden">
                {{ $subtotal->sum() }}
                </div>
                <div class="subtotal-price price px-2 text-[#FF412C] text-sm sm:text-base font-semibold">

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
      <script>
            let  subtotal = document.querySelector('.subtotal-holder');
            let actualSubtotal = document.querySelector('.subtotal-price');
            if(subtotal.innerText && !localStorage.getItem('subtotal')){
              localStorage.setItem('subtotal', subtotal.textContent);
              actualSubtotal.textContent = `$ ${localStorage.getItem('subtotal')}`;
            }else if(localStorage.getItem('subtotal')){
                //   actualSubtotal.textContent = `$ ${localStorage.getItem('subtotal')}`;
                //   localStorage.setItem('subtotal', subtotal.textContent);
              localStorage.setItem('subtotal', subtotal.innerText);
              actualSubtotal.textContent = `$ ${localStorage.getItem('subtotal')}`;
            }
      </script>
    <!-- script to send the AJAX Request to server -->
      <script>
              const productCartAlertMoodle = document.querySelector('.product-addcart-confirm');
              const moodleText = productCartAlertMoodle.querySelector('span');
              const productAlreadyCartAlert = document.querySelector('.product-alreadycart-confirm');
              const alreadyText = productAlreadyCartAlert.querySelector('span');

              function addToCart(product_id){
                // Get the data
                const productId = {
                  id: product_id
                };

                // Create an AJAX Request
                const xhrHttp = new XMLHttpRequest();
                let targetUrl = "{{ route('add.cart') }}";

                xhrHttp.open('POST', targetUrl, true);
                xhrHttp.setRequestHeader('Content-Type', 'application/json');
                xhrHttp.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

                xhrHttp.onreadystatechange = function () {
                    if(xhrHttp.readyState === 4 && xhrHttp.status === 200){
                        let response = JSON.parse(xhrHttp.responseText);
                        if(response.status === 'login to continue'){
                            location.href = '/login/customer';
                        } else if(response.status === 'The product has been added to cart successfully!'){
                            productCartAlertMoodle.style.display = 'block';
                            moodleText.textContent = response.status;
                            setTimeout(() => {
                              productCartAlertMoodle.style.display = 'none';
                            }, 8000);
                        } else if(response.status === 'The product is already in the cart!'){
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
      <section class="shopping-cart mx-auto px-[4%] lg:max-w-[1500px]">
        <div
        class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
      >
        wishlist
      </div>
        <div class="cart-section">
          <div class="shopping-cart-container text-[#384857] w-full">
          @forelse ($wishlists as $wishlist)
            <div class="shopping-cart-box flex flex-col sm:flex-row justify-between items-center sm:items-start p-4 h-auto sm:h-56 w-full border-b-2 my-4">
              <div class="cart-image h-full w-32 md:w-44">
                <img
                  src="{{ asset('/storage/'. $wishlist->product->firstImage)}}"
                  alt="A cart item"
                  class="md:-translate-y-4 h-auto scale-50 sm:h-full"
                />
              </div>
              <div class="cart-info h-full flex flex-col justify-between">
                <div class="space-y-2">
                  <div class="product-name font-semibold text-base sm:text-lg capitalize">
                  {{ $wishlist->product->productName }}
                  </div>
                  <div class="product-text text-sm capitalize">{{ $wishlist->product->brandName }}</div>
                  <div class="rating-box flex gap-2 items-center">
                    <div class="star-box text-center text-xs my-2 sm:my-4">
                    @switch($wishlist->product->avgRating)
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
              </div>
              <div class="action-box h-full flex flex-col justify-between">
                <div class="product-price self-end text-[#FF412C] text-sm font-bold">
                ${{ $wishlist->product->discountPrice }}
                </div>
                <div class="action-button mt-4 sm:mt-0 flex items-center gap-4">
                  <button type="submit" class="text-xs sm:text-sm px-4 py-2 bg-[#ffcf10] rounded-md text-center" onclick="removeCartItem('{{$wishlist->product->id}}', '{{$wishlist->product->discountPrice}}')">
                    Remove
                  </button>
                  <button type="submit"  class="text-xs sm:text-sm px-4 py-2 bg-[#68a4fe] rounded-md text-white text-center"    onclick="addToCart({{$wishlist->product->id}})">
                    add to cart
                  </button>
                </div>
              </div>
            </div>
            @empty
            <p class="my-8 text-base sm:text-lg">There are no products in the wishlist! You may consider add some</p>
            @endforelse
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
