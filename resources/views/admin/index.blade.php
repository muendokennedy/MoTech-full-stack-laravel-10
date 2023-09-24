<x-admin-layout>
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
</x-admin-layout>
