<x-adminguest-layout>
    <div class="sigup-box bg-white p-4 px-8 rounded-md w-[30rem] mx-auto">
          <form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <h2 class="text-center text-xl text-[#042EFF] font-semibold capitalize py-4 border-b-2">signup as an admin</h2>
            <div class="input-box">
              <label for="name" class="capitalize block py-3">Enter name:</label>
              <input type="text" name="name" id="name" class="p-2 rounded-md border-2 outline-none w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out" autofocus>
            </div>
            @error('name', 'email', 'adminProfile', 'password')
            <p class="text-red-500">{{$message}}</p>
            @enderror
            <div class="input-box mb-4">
              <label for="email" class="capitalize block py-3">Enter email:</label>
              <input type="text" name="email" id="email" class="p-2 rounded-md border-2 outline-none w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out" autofocus>
            </div>
            <div class="input-admin md:basis-[23%]  file-box flex items-center justify-center flex-col  border-dashed border-2 border-[#042EFF]">
              <div class="original-info-admin flex items-center justify-center flex-col">
                <div class="icon pt-4">
                  <label for="adminProfile" class="fa-solid fa-cloud-upload-alt text-4xl text-[#042EFF]"></label>
                </div>
                <div class="initial-info">
                  <label for="adminProfile" class="block py-2">Browse image:</label>
                </div>
              </div>
            </div>
              <input type="file" name="adminProfile" id="adminProfile" class="file-admin" hidden>
            <div class="input-box">
              <label for="password" class="capitalize block py-3">Enter password</label>
              <input type="password" name="password" id="password" class="p-2 rounded-md border-2 outline-none w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out" autofocus>
            </div>
            <div class="input-box">
              <label for="password_confirmation" class="capitalize block py-3">confirm your password:</label>
              <input type="password" name="password_confirmation" id="password_confirmation" class="p-2 rounded-md border-2 outline-none w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out" autofocus>
            </div>
            <button type="submit" class="text-white bg-[#042EFF] block w-full px-4 py-3 rounded-md my-6 capitalize hover:bg-[#384857] transition-all duration-300 ease-in-out">signup</button>
            <p class="capitalize"><span>already have an account? </span> <a href="adminlogin.html" class="text-[#042eff] hover:underline transition-all duration-300 ease-in-out">login here</a></p>
          </form>
        </div>
</x-adminguest-layout>
