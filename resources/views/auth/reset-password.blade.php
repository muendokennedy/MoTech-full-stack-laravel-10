<x-app-layout>
<section class="signup-home px-[4%] mt-16 mx-auto lg:max-w-[1500px]">
        <div
        class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
      >
      Reset your password
      </div>
      <form action="{{route('password.store')}}" method="POST" autocomplete="off">
      @csrf
        <div class="login-box h-auto w-full sm:w-11/12 md:w-4/5 mx-auto border-2 p-6 rounded-xl mt-10 sm:mt-16 shadow-[5px_5px_15px_8px_rgba(56,72,87,0.2)]">
          <h2 class="title text-base sm:text-2xl font-semibold text-center py-4 border-b-2 text-[#384857]">{{ __('Reset Password') }}</h2>
          <input type="hidden" name="token" value="{{$request->route('token')}}">
          <div class="input-row flex flex-col sm:flex-row w-full justify-between">
            <div class="input-box my-4 w-full">
              <label for="email" class="block pb-3 text-[#384857] text-sm md:text-base capitalize">{{ __('Enter your email:') }}</label>
              <input type="text" name="email" id="email" value="{{old('email')}}" class="@error('email') border-red-600  @enderror text-sm sm:text-base px-4 py-2 w-full border-2 outline-none rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">
              @error('email')
              <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
              @enderror
            </div>
          </div>
          <div class="input-row flex flex-col sm:flex-row w-full justify-between">
            <div class="input-box my-4 w-full">
              <label for="password" class="block pb-3 text-[#384857] text-sm md:text-base capitalize">{{ __('Enter your new password:') }}</label>
              <input type="password" name="password" id="password" class="@error('password') border-red-600  @enderror text-sm sm:text-base px-4 py-2 w-full border-2 outline-none rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">
              @error('password')
              <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
              @enderror
            </div>
          </div>
          <div class="input-row flex flex-col sm:flex-row w-full justify-between">
            <div class="input-box my-4 w-full">
              <label for="password_confirmation" class="block pb-3 text-[#384857] text-sm md:text-base capitalize">{{ __('Confirm your new password:') }}</label>
              <input type="password" name="password_confirmation" id="password_confirmation" class="@error('password_confirmation') border-red-600  @enderror sm:text-base px-4 py-2 w-full border-2 outline-none rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">
              @error('password_confirmation')
              <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
              @enderror
            </div>
          </div>
          <div class="input-box input-responsive my-4">
            <button type="submit" class="text-center px-4 py-2 text-sm md:text-base rounded-md text-white bg-[#68a4fe] hover:bg-[#384857] transition-all duration-300 ease-in-out">{{ __('Reset Password') }}</button>
          </div>
        </div>
      </form>
      </section>
</x-app-layout>
