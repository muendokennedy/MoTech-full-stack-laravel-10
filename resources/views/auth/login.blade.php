<x-app-layout>
<section class="signup-home px-[4%] mt-16 mx-auto lg:max-w-[1500px]">
        <div
        class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
      >
        account<span class="text-[#68A4FE] px-2"> login</span>
      </div>
      <form action="{{route('login.store')}}" method="POST">
      @csrf
        <div class="login-box h-auto w-full sm:w-11/12 md:w-4/5 mx-auto border-2 p-6 rounded-xl mt-10 sm:mt-16 shadow-[5px_5px_15px_8px_rgba(56,72,87,0.2)]">
          <h2 class="title text-base sm:text-2xl font-semibold text-center py-4 border-b-2 text-[#384857]">Sign in</h2>
          <div class="input-row flex flex-col sm:flex-row w-full justify-between">
            <div class="input-box my-4 w-full">
              <label for="email" class="block pb-3 text-[#384857] text-sm md:text-base capitalize">Enter your email:</label>
              <input type="text" name="email" id="email" value="{{old('email')}}" class="@error('email') border-red-600 @enderror text-sm sm:text-base px-4 py-2 w-full border-2 outline-none rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">
              @error('email')
              <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
              @enderror
              <input type="checkbox" name="remember" id="remember" checked class="hidden">
            </div>
          </div>
          <div class="input-row flex flex-col sm:flex-row w-full justify-between">
            <div class="input-box my-4 w-full">
              <label for="password" class="block pb-3 text-[#384857] text-sm md:text-base capitalize">Enter password:</label>
              <input type="password" name="password" id="password" value="{{old('password')}}" class="@error('password') border-red-600 @enderror text-sm sm:text-base px-4 py-2 w-full border-2 outline-none rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">
              @error('password')
              <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
              @enderror
            </div>
          </div>
          <p class="text-[#68a4fe] capitalize text-sm sm:text-base py-2"><a href="{{route('password.request')}}" class="hover:underline transition-all duration-300 ease-in-out">forgot password?</a></p>
          <div class="input-box input-responsive my-4">
            <button type="submit" class="text-center px-4 py-2 text-sm md:text-base rounded-md text-white bg-[#68a4fe] hover:bg-[#384857] transition-all duration-300 ease-in-out">Proceed to checkout</button>
          </div>
          <p class="text-base sm:text-lg font-semibold text-[#384857] capitalize">Or signin with</p>
          <div class="signup-with-box my-4 flex items-center gap-2 w-full md:w-2/3">
            <div class="google flex items-center gap-2 sm:gap-8 border-2 hover:border-red-500 basis-[30%] sm:basis-[48%] py-2 px-4 rounded-md text-red-500 cursor-pointer transition-all duration-300 ease-in-out">
              <i class="fa-brands fa-google text-base sm:text-2xl font-bold"></i>
              <span class="text-xs sm:text-xl capitalize">Google</span>
            </div>
            <div class="facebook flex items-center gap-2 sm:gap-8 border-2 hover:border-blue-700 basis-[30%] sm:basis-[48%] py-2 px-4 rounded-md text-blue-700 cursor-pointer transition-all duration-300 ease-in-out">
              <i class="fa-brands fa-facebook-f text-base sm:text-2xl font-bold"></i>
              <span class="text-xs sm:text-xl capitalize">facebook</span>
            </div>
          </div>
          <p class="have-account capitalize text-sm sm:text-base py-4 text-[#384857]"><span>don't have an account yet?</span><a href="{{route('customer.signup')}}" class="text-[#68a4fe] ml-4 hover:underline transition-all duration-300 ease-in-out">signup here</a></p>
        </div>
      </form>
      </section>
</x-app-layout>
