<x-app-layout>
<section class="signup-home px-[4%] mt-16 mx-auto lg:max-w-[1500px]">
        <div
        class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
      >
        Checkout<span class="text-[#68A4FE] px-2"> here</span>
      </div>
      <div class="checkout-container flex w-full gap-8">
          <div class="signup-box h-auto w-full sm:w-11/12 md:w-1/2 mx-auto border-2 p-6 rounded-xl mt-10 sm:mt-16 shadow-[5px_5px_15px_8px_rgba(56,72,87,0.2)]">
          <form action="{{route('customer.store')}}" method="POST" autocomplete="off">
          @csrf
              <h2 class="title text-base sm:text-2xl font-semibold text-center py-4 border-b-2 text-[#384857]">Checkout</h2>
              <div class="input-row flex flex-col sm:flex-row w-full justify-between">
                <div class="input-box my-4 w-full sm:basis-[48%]">
                  <label for="name" class="block pb-3 text-[#384857] text-sm md:text-base capitalize">Enter name:</label>
                  <input type="text" name="name" id="name" placeholder="John Doe"  value="{{old('name')}}" class="@error('name') border-red-600 @enderror sm:text-base px-4 py-2 w-full border-2 outline-none rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">
                  @error('name')
                  <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
                <div class="input-box my-4 w-full sm:basis-[48%]">
                  <label for="email" class="block pb-3 text-[#384857] text-sm md:text-base capitalize">Enter email:</label>
                  <input type="text" name="email" id="email" placeholder="johndoe@example.com" value="{{old('email')}}" class="@error('email') border-red-600 @enderror text-sm sm:text-base px-4 py-2 w-full border-2 outline-none rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">
                  @error('email')
                  <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
            </div>
            <div class="input-row flex flex-col sm:flex-row w-full justify-between">
                <div class="input-box my-4 w-full sm:basis-[48%]">
                  <label for="phone" class="block pb-3 text-[#384857] text-sm md:text-base capitalize">Enter Phone number:</label>
                  <input type="tel" name="phone" id="phone" placeholder="07140234008" value="{{old('phone')}}" class="@error('phone') border-red-600 @enderror text-sm sm:text-base px-4 py-2 w-full border-2 outline-none rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">
                  @error('phone')
                  <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
                <div class="input-box my-4 w-full sm:basis-[48%]">
                  <label for="address" class="block pb-3 text-[#384857] text-sm md:text-base capitalize">Enter Location address & town:</label>
                  <input type="text" name="address" id="address" placeholder="P.O BOX 45-5766, NAIROBI" value="{{old('address')}}" class="@error('address') border-red-600 @enderror text-sm sm:text-base px-4 py-2 w-full border-2 outline-none rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">
                  @error('address')
                  <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
              </div>
              <div class="input-row flex flex-col sm:flex-row w-full justify-between">
                <div class="input-box my-4 w-full sm:basis-[48%]">
                  <label for="password" class="block pb-3 text-[#384857] text-sm md:text-base capitalize">Enter password:</label>
                  <input type="password" name="password" id="password" value="{{old('password')}}" class="@error('password') border-red-600 @enderror text-sm sm:text-base px-4 py-2 w-full border-2 outline-none rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">
                  @error('password')
                  <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
                <div class="input-box my-4 w-full sm:basis-[48%]">
                  <label for="password_confirmation" class="block pb-3 text-[#384857] text-sm md:text-base capitalize">Confirm your password:</label>
                  <input type="password" name="password_confirmation" id="password_confirmation" value="{{old('password_confirmation')}}" class="@error('password_confirmation') border-red-600 @enderror text-sm sm:text-base px-4 py-2 w-full border-2 outline-none rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">
                  @error('password_confirmation')
                  <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
                  @enderror
                </div>
              </div>
              <div class="input-box input-responsive my-4">
                <button type="submit" class="text-center px-4 py-2 text-sm md:text-base rounded-md text-white bg-[#68a4fe] hover:bg-[#384857] transition-all duration-300 ease-in-out">Proceed to create account</button>
              </div>
            </form>
        </div>
          <div class="checkout-item-details w-1/2">

          </div>
      </div>
      </section>
</x-app-layout>
