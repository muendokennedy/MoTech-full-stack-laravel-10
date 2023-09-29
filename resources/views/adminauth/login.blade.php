<x-adminguest-layout>
        <div class="sigup-box bg-white p-4 px-8 rounded-md w-[30rem] mx-auto">
          <form action="{{ route('admin.authenticate')}}" method="POST" autocomplete="off">
          @csrf
            <h2 class="text-center text-xl text-[#042EFF] font-semibold capitalize py-4 border-b-2">Login in as admin</h2>
            <div class="input-box">
              <label for="email" class="capitalize block py-3">Enter your email:</label>
              <input type="text" name="email" id="email" value="{{old('email')}}" class="@error('email') border-red-600 @enderror p-2 rounded-md border-2 outline-none w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
              @error('email')
              <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
              @enderror
            </div>
            <div class="input-box">
              <label for="password" class="capitalize block py-3">Enter your password</label>
              <input type="password" name="password" id="password"  value="{{old('password')}}" class="@error('password') border-red-600 @enderror p-2 rounded-md border-2 outline-none w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
              @error('password')
              <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
              @enderror
            </div>
            <p class="capitalize my-4"><a href="login.html" class="text-[#042eff] hover:underline transition-all duration-300 ease-in-out">Forgot password</a></p>
            <button type="submit" class="text-white bg-[#042EFF] block w-full px-4 py-3 rounded-md my-6 capitalize hover:bg-[#384857] transition-all duration-300 ease-in-out">log in as admin</button>
          </form>
        </div>
</x-adminguest-layout>
