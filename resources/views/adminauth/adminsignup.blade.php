<x-adminguest-layout>
    <div class="sigup-box bg-white p-4 px-8 rounded-md w-[30rem] mx-auto">
          <form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
          @csrf
            <h2 class="text-center text-xl text-[#042EFF] font-semibold capitalize py-4 border-b-2">signup as an admin</h2>
            <div class="input-box">
              <label for="name" class="capitalize block py-3">Enter name:</label>
              <input type="text" name="name" id="name" value="{{old('name')}}" class="@error('name') border-red-600 @enderror p-2 rounded-md border-2 outline-none w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
              @error('name')
              <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
              @enderror
            </div>
            <div class="input-box mb-4">
              <label for="email" class="capitalize block py-3">Enter email:</label>
              <input type="text" name="email" id="email" value="{{old('email')}}" class="@error('email') border-red-600 @enderror p-2 rounded-md border-2 outline-none w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
              @error('email')
              <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
              @enderror
            </div>
            <div class="input-admin md:basis-[23%]  file-box flex items-center justify-center flex-col  border-dashed border-2 border-[#042EFF] @error('adminProfile') border-red-600 @enderror">
              <div class="original-info-admin flex items-center justify-center flex-col">
                <div class="icon pt-4">
                  <label for="adminProfile" class="fa-solid fa-cloud-upload-alt text-4xl text-[#042EFF]"></label>
                </div>
                <div class="initial-info">
                  <label for="adminProfile" class="block py-2">Browse image:</label>
                </div>
              </div>
            </div>
            @error('adminProfile')
            <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
            @enderror
              <input type="file" name="adminProfile" id="adminProfile" value="{{old('adminProfile')}}" class="file-admin" hidden>
            <div class="input-box">
              <label for="password" class="capitalize block py-3">Enter password</label>
              <input type="password" name="password" id="password" value="{{old('password')}}"  class="@error('password') border-red-600 @enderror p-2 rounded-md border-2 outline-none w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
              @error('password')
              <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
              @enderror
            </div>
            <div class="input-box">
              <label for="password_confirmation" class="capitalize block py-3">confirm your password:</label>
              <input type="password" name="password_confirmation" id="password_confirmation" value="{{old('password_confirmation')}}" class="@error('password_confirmation') border-red-600 @enderror p-2 rounded-md border-2 outline-none w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out">
              @error('password_confirmation')
              <p class="text-red-600 text-sm sm:text-base py-2 w-full">{{$message}}</p>
              @enderror
            </div>
            <button type="submit" class="text-white bg-[#042EFF] block w-full px-4 py-3 rounded-md my-6 capitalize hover:bg-[#384857] transition-all duration-300 ease-in-out">signup</button>
            <p class="capitalize"><span>already have an account? </span> <a href="{{route('admin.login')}}" class="text-[#042eff] hover:underline transition-all duration-300 ease-in-out">login here</a></p>
          </form>
        </div>
</x-adminguest-layout>
