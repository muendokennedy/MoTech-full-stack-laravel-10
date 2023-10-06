<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- The font-awesome CDN link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
        <!-- Scripts -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <!-- The CKEditor loader CDN link -->
        <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
        <!-- The custom css link -->
        @vite(['resources/css/admin.css', 'resources/js/admin/sidebarToggle.js', 'resources/js/admin/chartData.js', 'resources/js/admin/imageBrowser.js', 'resources/js/admin/productEditMoodle.js'])
    </head>
    <body>
      <input type="checkbox" id="menu-bar" class="hidden">
      <div class="z-50 side-bar fixed left-0 min-h-screen w-[15rem] bg-[#042EFF] py-4 flex flex-col justify-between">
      <div class="sidebar-primary-box">
        <h2 class="side-bar-title text-white font-bold text-2xl text-center capitalize my-4">moTech</h2>
        <ul class="my-8 text-white px-4 space-y-2 capitalize">
          <li><a href="{{route('admin.dashboard')}}"><i class="fa-solid fa-house px-4 py-2 text-xl"></i><span>dashboard</span></a></li>
          <li><a href="{{route('admin.analytics')}}"><i class="fa-solid fa-chart-simple px-4 py-2 text-xl"></i><span>analytics</span></a></li>
          <li><a href="{{route('admin.products')}}"><i class="fa-solid fa-box px-4 py-2 text-xl"></i><span>products</span></a></li>
          <li><a href="{{route('admin.orders')}}"><i class="fa-solid fa-list px-4 py-2 text-xl"></i><span>orders</span></a></li>
          <li><a href="{{route('admin.stock')}}"><i class="fa-solid fa-database px-4 py-2 text-xl"></i><span>stock</span></a></li>
          <li><a href="{{route('admin.client')}}"><i class="fa-solid fa-user px-4 py-2 text-xl"></i><span>client info</span></a></li>
          <li><a href="{{route('admin.settings')}}"><i class="fa-solid fa-gear px-4 py-2 text-xl"></i><span>settings</span></a></li>
        </ul>
      </div>
      <div class="side-bar-bottom my-4 text-white px-4 space-y-2 capitalize">
        <ul>
          <li>
          <form action="{{route('admin.logout')}}" method="POST">
          @csrf
          <button type="submit"><i class="fa-solid fa-right-from-bracket px-4 py-2 text-xl"></i><span>log out</span></button></li>
        </form>
        </ul>
      </div>
    </div>
    <section class="ml-[15rem] w-[calc(100% - 15rem)] main-content min-h-screen">
      <header class="w-[calc(100% - 15rem)] main-header flex justify-between gap-2 px-2 py-2 items-center pr-4 fixed top-0 left-[15rem] right-0 z-20 bg-white">
        <div class="flex items-center">
          <label for="menu-bar" class="cursor-pointer menu-bar"><i class="fa-solid fa-bars text-2xl font-bold p-2"></i></label>
          <h2 class="capitalize text-lg sm:text-xl font-semibold text-[#042EFF]">dashboard</h2>
        </div>
        <div class="header-search  w-1/3 lg:w-1/2 hidden lg:flex items-center relative">
          <input type="search" name="search-term" id="search-term" placeholder="search here..." class="border-2 rounded-md px-4 py-3 w-full outline-none pr-[70px] focus:border-[#042EFF] transition-all duration-300 ease-in-out">
          <label for="search-term" class="rounded-r-md absolute right-2 inline-block px-4 py-1 text-white bg-[#042EFF] cursor-pointer"><i class="fa-solid fa-search text-xl font-bold"></i></label>
        </div>
        <div class="profile-section sm:ml-auto lg:ml-0 border-2 flex items-center rounded-md w-36 sm:w-64 justify-between">
          <div class="profile-pic h-[48px] w-[70px] p-1">
            <img src="{{ asset('/storage/'. auth('admin')->user()->avatar)}}" alt="profile image" class="w-full h-full object-cover rounded-l-md">
          </div>
          <span class="sm:pr-2 text-xs sm:text-base">{{auth('admin')->user()->name}}</span>
        </div>
      </header>
      <main class="bg-[#E4E7F3] pt-20 px-[3%] pb-4">
      <!-- The landing page home page section -->
      {{ $slot }}

      </main>
    </section>
    <script>



    </script>
  </body>
</html>
