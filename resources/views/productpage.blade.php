<x-app-layout>
    <section class="product-home mt-16 px-[4%] mx-auto lg:max-w-[1500px]">
        <div
        class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
      >
        <span class="text-[#68A4FE] px-2">product</span> page
      </div>
      <div class="product flex items-center flex-col md:flex-row justify-between w-full">
        <div class="w-full md:basis-[48%] p-2 sm:p-4 flex flex-col items-center">
          <div class="master-image w-[15rem] md:w-[16rem] h-[15rem] md:h-[20rem] flex justify-center items-center my-6">
            <img src="images/redmi note 12.png" alt="Detailed product image" class="m-auto w-full h-full object-cover">
          </div>
          <div class="w-full sm:w-4/5 flex justify-between gap-2 md:gap-4 mx-auto">
            <div class="small-image h-20 border-2 p-1 sm:p-2 rounded-md cursor-pointer">
              <img src="images/redmi note 12.png" alt="Extra small image description" class="h-full object-cover">
            </div>
            <div class="small-image h-20 border-2 p-1 sm:p-2 rounded-md cursor-pointer">
              <img src="images/techno spark 5.png" alt="Extra small image description" class="h-full object-cover">
            </div>
            <div class="small-image h-20 border-2 p-1 sm:p-2 rounded-md cursor-pointer">
              <img src="images/xiaomi redmi 10 2022 pro.png" alt="Extra small image description" class="h-full object-cover">
            </div>
            <div class="small-image h-20 border-2 p-1 sm:p-2 rounded-md cursor-pointer">
              <img src="images/techno camon 18p.png" alt="Extra small image description" class="h-full object-cover">
            </div>
          </div>
          <div class="action-button-container my-4 sm:my-8 flex w-full justify-between">
            <button type="submit" class="text-sm sm:text-base px-2 sm:px-4 py-3 rounded-md w-40 bg-[#ffcf10] basis-[48%] capitalize">Proceed to buy</button>
            <button type="submit" class="text-sm sm:text-base px-2 sm:px-4 py-3 rounded-md w-40 bg-[#68a4fe] basis-[48%] text-white capitalize">save for later</button>
          </div>
        </div>
        <div class="product-content-details w-full md:basis-[48%] p-2 sm:p-4 my-2 md:my-4">
          <div class="product-title font-semibold text-lg sm:text-xl mb-4 text-[#384857]">Tecno spark 10P</div>
          <div class="product-manufacturer text-sm text-[#384857]">Produced by techno</div>
          <div class="flex gap-4 items-center my-2 border-b-2 py-4">
            <div class="text-xs text-[#ffcf10]">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <div class="rating-text text-xs text-[#68a4fe]">
              100,450+ ratings | over 100k delivered
            </div>
          </div>
          <div class="price-details my-2">
            <p class="first-price text-sm py-2 text-[#384857]">Most recent price: <span>$180</span></p>
            <p class="deal-price text-sm py-2 text-[#384857]">Deal price: <span class="text-[#FF412C]">$150</span> inclusive of <span class="inline font-semibold text-[#384857]">VAT</span></p>
            <p class="save-amount text-sm py-2 capitalize text-[#384857]">save: <span class="text-[#FF412C]">$130</span></p>
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
              <div class="return-text text-sm text-[#68a4fe]">1 year warranty</div>
            </div>
          </div>
          <div class="delivery-timeline text-sm my-4">Delivery by: <span>March 29 - April 1</span></div>
          <div class="vendor-name text-sm my-4">
            <span>Sold by MoTech electronics</span> <span>(250 out of 300 already sold)</span>
          </div>
          <div class="product-specification-details flex justify-between my-6 text-[#384857] mb-auto">
            <div class="ram flex flex-col gap-2">
              <span class="block font-semibold text-[#384857] text-base sm:text-xl">size:</span>
              <span class="border-2 px-2 sm:px-6 md:px-3 py-2 rounded-md font-normal sm:font-semibold text-base sm:text-xl">4GB</span>
            </div>
            <div class="ram flex flex-col gap-2">
              <span class="block font-semibold text-[#384857] text-base sm:text-xl">Resolution:</span>
              <span class="border-2 px-2 sm:px-6 md:px-3 py-2 rounded-md font-normal sm:font-semibold text-base sm:text-xl">450 X 1080</span>
            </div>
            <div class="ram flex flex-col gap-2">
              <span class="block font-semibold text-[#384857] text-base sm:text-xl">camera:</span>
              <span class="border-2 px-2 sm:px-6 md:px-3 py-2 rounded-md font-normal sm:font-semibold text-base sm:text-xl">40MP</span>
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
        Iure omnis explicabo praesentium. Aut tenetur enim aperiam quibusdam sunt enim quidem aperiam sit. Quos qui id.  Vitae adipisci vitae maxime architecto reiciendis nihil est. Sit maiores quibusdam. Voluptatem dolorem omnis suscipit. Nulla id voluptatem. Sed fugit explicabo dolores quaerat quod voluptatem eos sed. Consequatur optio corporis provident. Sed voluptas mollitia magni expedita dolorem quod qui necessitatibus. Reiciendis sequi est ev eniet sit. Illum quasi quis rerum qui quam fuga aut. Consequatur officiis error molestiae cum.
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
</x-app-layout>
