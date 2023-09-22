<x-app-layout>
<section class="product-top pt-16 px-[4%] mx-auto lg:max-w-[1500px]">
        <div
        class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
      >
        Reset your <span class="text-[#68A4FE] px-2">password</span>
      </div>
    <div class="my-6 text-xs md:text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="input-box my-4 w-full sm:basis-[48%]">
              <label for="email" class="block pb-3 text-[#384857] text-sm md:text-base capitalize">Enter your email:</label>
              <input type="text" name="email" id="email" class="text-sm sm:text-base px-4 py-2 w-full border-2 outline-none rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out" autofocus>
        </div>

        <div class="flex items-center justify-end mt-4">
        <div class="input-box input-responsive my-4">
            <button type="submit" class="text-center px-4 py-2 text-sm md:text-base rounded-md text-white bg-[#68a4fe] hover:bg-[#384857] transition-all duration-300 ease-in-out">{{ __('Email Password Reset Link') }}</button>
        </div>
        </div>
    </form>
</section>
</x-app-layout>
