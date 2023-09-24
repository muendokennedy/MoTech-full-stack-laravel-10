<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MoTech ecommmerce admin panel</title>
    <!-- The  font-awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <!-- The custom css link -->
    @vite(['resources/css/admin.css', 'resources/js/sidebarToggle.js'])
  </head>
  <body>
      <input type="checkbox" id="menu-bar" class="hidden">
      <div class="z-50 side-bar fixed left-0 min-h-screen w-[15rem] bg-[#042EFF] py-4 flex flex-col justify-between">
      <div class="sidebar-primary-box">
        <h2 class="side-bar-title text-white font-bold text-2xl text-center capitalize my-4">moTech</h2>
        <ul class="my-8 text-white px-4 space-y-2 capitalize">
          <li><a href="index.html"><i class="fa-solid fa-house px-4 py-2 text-xl"></i><span>dashboard</span></a></li>
          <li><a href="analytics.html"><i class="fa-solid fa-chart-simple px-4 py-2 text-xl"></i><span>analytics</span></a></li>
          <li><a href="products.html"><i class="fa-solid fa-box px-4 py-2 text-xl"></i><span>products</span></a></li>
          <li><a href="orders.html"><i class="fa-solid fa-list px-4 py-2 text-xl"></i><span>orders</span></a></li>
          <li><a href="stock.html"><i class="fa-solid fa-database px-4 py-2 text-xl"></i><span>stock</span></a></li>
          <li><a href="clientinfo.html"><i class="fa-solid fa-user px-4 py-2 text-xl"></i><span>client info</span></a></li>
          <li><a href="settings.html"><i class="fa-solid fa-gear px-4 py-2 text-xl"></i><span>settings</span></a></li>
        </ul>
      </div>
      <div class="side-bar-bottom my-4 text-white px-4 space-y-2 capitalize">
        <ul>
          <li><a href="logout.html"><i class="fa-solid fa-right-from-bracket px-4 py-2 text-xl"></i><span>log out</span></a></li>
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
            <img src="images/man4.jpeg" alt="profile image" class="w-full h-full object-cover rounded-l-md">
          </div>
          <span class="sm:pr-2 text-xs sm:text-base">Kennedy Munyao</span>
        </div>
      </header>
      <main class="bg-[#E4E7F3] pt-20 px-[3%] pb-4">
        <div class="dashboard-box-container py-4 grid grid-cols-2 md:grid-cols-3 gap-4">
          <div class="box flex gap-4  bg-white p-4 rounded-md">
            <div class="left space-y-2">
              <h3 class="text-base font-semibold text-[#042EFF]">orders</h3>
              <h1 class="text-2xl font-semibold">40,876</h1>
              <i class="fa-solid fa-arrow-up inline-block h-8 w-8 text-center leading-8 rounded-full bg-[#B5FFD5] text-[#042EFF]"></i>
            </div>
            <div class="right flex flex-col gap-4 items-center">
              <span class="h-14 w-14 rounded-md bg-[#B5FFD5] text-center fa-solid fa-arrow-up leading-[3.5rem] text-3xl text-[#042EFF]"></span>
              <span class="text-sm">Up from yesterday</span>
            </div>
          </div>
          <div class="box flex gap-4  bg-white p-4 rounded-md">
            <div class="left space-y-2">
              <h3 class="text-base font-semibold text-[#042EFF]">analytics</h3>
              <h1 class="text-2xl font-semibold">100,456</h1>
              <i class="fa-solid fa-arrow-up inline-block h-8 w-8 text-center leading-8 rounded-full bg-[#B5FFD5] text-[#042EFF]"></i>
            </div>
            <div class="right flex flex-col gap-4 items-center">
              <span class="h-14 w-14 rounded-md bg-[#B5FFD5] text-center fa-solid fa-arrow-up leading-[3.5rem] text-3xl text-[#042EFF]"></span>
              <span class="text-sm">Up from yesterday</span>
            </div>
          </div>
          <div class="box flex gap-4  bg-white p-4 rounded-md">
            <div class="left space-y-2">
              <h3 class="text-base font-semibold text-[#042EFF]">products</h3>
              <h1 class="text-2xl font-semibold">40,876</h1>
              <i class="fa-solid fa-arrow-up inline-block h-8 w-8 text-center leading-8 rounded-full bg-[#B5FFD5] text-[#042EFF]"></i>
            </div>
            <div class="right flex flex-col gap-4 items-center">
              <span class="h-14 w-14 rounded-md bg-[#B5FFD5] text-center fa-solid fa-arrow-up leading-[3.5rem] text-3xl text-[#042EFF]"></span>
              <span class="text-sm">Up from yesterday</span>
            </div>
          </div>
          <div class="box flex gap-4  bg-white p-4 rounded-md">
            <div class="left space-y-2">
              <h3 class="text-base font-semibold text-[#042EFF]">stock</h3>
              <h1 class="text-2xl font-semibold">40,876</h1>
              <i class="fa-solid fa-arrow-down inline-block h-8 w-8 text-center leading-8 rounded-full bg-[#FBE4DD] text-[#FF4004]"></i>
            </div>
            <div class="right flex flex-col gap-4 items-center">
              <span class="h-14 w-14 rounded-md bg-[#FBE4DD] text-center fa-solid fa-arrow-down leading-[3.5rem] text-3xl text-[#FF4004]"></span>
              <span class="text-sm">down from yesterday</span>
            </div>
          </div>
        </div>
        <div class="top-sales-container flex flex-col md:flex-row my-8 w-full gap-4">
          <div class="recent-sales bg-white p-4 rounded-md w-full md:w-2/3">
            <h2 class="text-[#042EFF] font-semibold text-2xl">Recent sales</h2>
            <div class="table-container overflow-x-auto">
              <table class="w-[40rem] md:w-full">
                <thead class="text-left">
                  <tr>
                    <th class="py-4">Date</th>
                    <th class="py-4">Customer</th>
                    <th class="py-4">Status</th>
                    <th class="py-4">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-2">02 Aug 2023</td>
                    <td class="py-2">Mark Alex</td>
                    <td class="py-2">Delivered</td>
                    <td class="py-2">$563</td>
                  </tr>
                  <tr>
                    <td class="py-2">02 Aug 2023</td>
                    <td class="py-2">Mark Alex</td>
                    <td class="py-2">Delivered</td>
                    <td class="py-2">$563</td>
                  </tr>
                  <tr>
                    <td class="py-2">02 Aug 2023</td>
                    <td class="py-2">Mark Alex</td>
                    <td class="py-2">Delivered</td>
                    <td class="py-2">$563</td>
                  </tr>
                  <tr>
                    <td class="py-2">02 Aug 2023</td>
                    <td class="py-2">Mark Alex</td>
                    <td class="py-2">Delivered</td>
                    <td class="py-2">$563</td>
                  </tr>
                </tbody>
              </table>
              <button type="submit" class="px-4 py-2 rounded-md text-white bg-[#042EFF] mt-4">see more</button>
            </div>
          </div>
          <div class="recent-sales bg-white p-4 rounded-md w-full md:w-2/3">
            <h2 class="text-[#042EFF] font-semibold text-2xl">Top selling product</h2>
            <div class="table-container overflow-x-auto">
              <table class="w-[40rem] md:w-full">
                <thead class="text-left">
                  <tr>
                    <th class="py-4">Product</th>
                    <th class="py-4">Brand</th>
                    <th class="py-4">price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-2"><img src="images/redmi note 12.png" alt="product" class="h-14 w-auto"></td>
                    <td class="py-2">Tecno spark10P</td>
                    <td class="py-2">$563</td>
                  </tr>
                  <tr>
                    <td class="py-2"><img src="images/redmi note 12.png" alt="product" class="h-14 w-auto"></td>
                    <td class="py-2">Tecno spark10P</td>
                    <td class="py-2">$563</td>
                  </tr>
                  <tr>
                    <td class="py-2"><img src="images/redmi note 12.png" alt="product" class="h-14 w-auto"></td>
                    <td class="py-2">Tecno spark10P</td>
                    <td class="py-2">$563</td>
                  </tr>
                  <tr>
                    <td class="py-2"><img src="images/redmi note 12.png" alt="product" class="h-14 w-auto"></td>
                    <td class="py-2">Tecno spark10P</td>
                    <td class="py-2">$563</td>
                  </tr>
                </tbody>
              </table>
              <button type="submit" class="px-4 py-2 rounded-md text-white bg-[#042EFF] mt-4">see more</button>
            </div>
          </div>
        </div>
        <div class="recent-signups-container my-8 w-full">
          <div class="recent-sales bg-white p-4 rounded-md">
            <h2 class="text-[#042EFF] font-semibold text-2xl">Recent sign ups</h2>
            <div class="table-container overflow-x-auto">
              <table class="w-[40rem] md:w-full">
                <thead class="text-left">
                  <tr>
                    <th class="py-4">Date</th>
                    <th class="py-4">Name</th>
                    <th class="py-4">Phone</th>
                    <th class="py-4">Email</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-2">02 Aug 2023</td>
                    <td class="py-2">Mark Alex</td>
                    <td class="py-2">0745079253</td>
                    <td class="py-2">markalex@gmail.com</td>
                  </tr>
                  <tr>
                    <td class="py-2">02 Aug 2023</td>
                    <td class="py-2">Mark Alex</td>
                    <td class="py-2">0745079253</td>
                    <td class="py-2">markalex@gmail.com</td>
                  </tr>
                  <tr>
                    <td class="py-2">02 Aug 2023</td>
                    <td class="py-2">Mark Alex</td>
                    <td class="py-2">0745079253</td>
                    <td class="py-2">markalex@gmail.com</td>
                  </tr>
                  <tr>
                    <td class="py-2">02 Aug 2023</td>
                    <td class="py-2">Mark Alex</td>
                    <td class="py-2">0745079253</td>
                    <td class="py-2">markalex@gmail.com</td>
                  </tr>
                </tbody>
              </table>
              <button type="submit" class="px-4 py-2 rounded-md text-white bg-[#042EFF] mt-4">see more</button>
            </div>
          </div>
        </div>
      </main>
    </section>
  </body>
</html>
