<x-app-layout>
<section class="signup-home px-[4%] mt-16 mx-auto lg:max-w-[1500px]">
        <div
        class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
      >
        Checkout<span class="text-[#68A4FE] px-2"> here</span>
      </div>
      <form action="{{route('customer.store')}}" method="POST" autocomplete="off">
      <div class="checkout-container flex w-full gap-8">
          <div class="signup-box h-auto w-full sm:w-11/12 md:w-1/2 mx-auto border-2 p-6 rounded-xl mt-10 sm:mt-16 shadow-[5px_5px_15px_8px_rgba(56,72,87,0.2)]">
          @csrf
              <h2 class="title text-base sm:text-2xl font-semibold text-center py-4 border-b-2 text-[#384857]">Checkout</h2>
              <div class="input-row flex flex-col sm:flex-row w-full justify-between">
                <div class="input-box my-4 w-full sm:basis-[48%]">
                  <label for="fname" class="block pb-3 text-[#384857] text-sm md:text-base capitalize">Enter first name:</label>
                  <input type="text" name="fname" id="fname" placeholder="John"  value="{{old('fname')}}" class="@error('fname') border-red-600 @enderror sm:text-base px-4 py-2 w-full border-2 outline-none rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">
                  @error('fname')
                  <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
                <div class="input-box my-4 w-full sm:basis-[48%]">
                  <label for="lname" class="block pb-3 text-[#384857] text-sm md:text-base capitalize">Enter last name:</label>
                  <input type="text" name="lname" id="lname" placeholder="Doe" value="{{old('lname')}}" class="@error('lname') border-red-600 @enderror text-sm sm:text-base px-4 py-2 w-full border-2 outline-none rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">
                  @error('lname')
                  <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
            </div>
            <div class="input-row flex flex-col sm:flex-row w-full justify-between">
                <div class="input-box my-4 w-full sm:basis-[48%]">
                  <label for="email" class="block pb-3 text-[#384857] text-sm md:text-base capitalize">Enter email:</label>
                  <input type="tel" name="email" id="email" placeholder="johndoe@example.com" value="{{old('email')}}" class="@error('email') border-red-600 @enderror text-sm sm:text-base px-4 py-2 w-full border-2 outline-none rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">
                  @error('email')
                  <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
                <div class="input-box my-4 w-full sm:basis-[48%]">
                  <label for="phone" class="block pb-3 text-[#384857] text-sm md:text-base capitalize">Enter Phone:</label>
                  <input type="text" name="phone" id="phone" placeholder="0700453001" value="{{old('phone')}}" class="@error('phone') border-red-600 @enderror text-sm sm:text-base px-4 py-2 w-full border-2 outline-none rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">
                  @error('phone')
                  <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
              </div>
              <div class="input-row flex flex-col sm:flex-row w-full justify-between">
                <div class="input-box my-4 w-full sm:basis-[48%]">
                  <label for="address1" class="block pb-3 text-[#384857] text-sm md:text-base capitalize">Enter address 1:</label>
                  <input type="text" name="address1" id="address1" placeholder="P.O BOX 45-5766, NAIROBI" value="{{old('address1')}}" class="@error('address1') border-red-600 @enderror text-sm sm:text-base px-4 py-2 w-full border-2 outline-none rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">
                  @error('address1')
                  <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
                <div class="input-box my-4 w-full sm:basis-[48%]">
                  <label for="address2" class="block pb-3 text-[#384857] text-sm md:text-base capitalize">Enter address 2:</label>
                  <input type="text" name="address2" id="address2" placeholder="P.O BOX 45-5766, NAIROBI" value="{{old('address2')}}" class="@error('address2') border-red-600 @enderror text-sm sm:text-base px-4 py-2 w-full border-2 outline-none rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">
                  @error('address2')
                  <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
              </div>
            </div>
            <div class="signup-box h-auto w-full sm:w-11/12 md:w-1/2 mx-auto border-2 p-6 rounded-xl mt-10 sm:mt-16 shadow-[5px_5px_15px_8px_rgba(56,72,87,0.2)]">
                <h2 class="title text-base sm:text-2xl font-semibold text-center py-4 border-b-2 text-[#384857]">Order Details</h2>
                <table class="border-2 my-4 w-full">
                    <thead>
                  <tr>
                      <th class="border-2 py-2">Name</th>
                      <th class="border-2 py-2">Quantity</th>
                      <th class="border-2 py-2">Price</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($cartItems as $item)
                <tr>
                    <td class="border-2 py-2 text-center">{{ $item->product->productName}}</td>
                    <td class="border-2 py-2 text-center">{{ $item->product->productName}}</td>
                    <td class="border-2 py-2 text-center">{{ number_format($item->product->discountPrice)}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="input-box input-responsive my-4 mt-8">
    <button type="submit" class="text-center px-4 py-2 text-sm md:text-base rounded-md text-white bg-[#68a4fe] hover:bg-[#384857] transition-all duration-300 ease-in-out">Place Order</button>
</div>
</form>
      </section>
</x-app-layout>
