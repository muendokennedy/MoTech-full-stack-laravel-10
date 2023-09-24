<x-admin-layout>
    <div class="canvas-container overflow-x-auto">
      <div class="recent-sales bg-white p-4 rounded-md w-[40rem] md:w-full">
        <h2 class="text-[rgb(4,46,255)] font-semibold text-lg sm:text-2xl py-4">Recent signups</h2>
        <canvas id="myChart1" class="w-full"></canvas>
      </div>
    </div>
    <div class="canvas-container overflow-x-auto">
      <div class="recent-sales bg-white p-4 rounded-md w-[40rem] md:w-full my-4">
        <h2 class="text-[rgb(4,46,255)] font-semibold text-lg sm:text-2xl py-4">Recent sales</h2>
        <canvas id="myChart2" class="w-full"></canvas>
      </div>
    </div>
    <div class="canvas-container overflow-x-auto">
    <div class="top-sales-container flex flex-col md:flex-row my-8 w-full gap-4">
        <div class="recent-sales bg-white p-4 rounded-md w-[40rem] md:w-full">
          <h2 class="text-[#042EFF] font-semibold text-base md:text-xl">Profits per Month</h2>
          <canvas id="myChart3" class="w-full"></canvas>
        </div>
        <div class="recent-sales bg-white p-4 rounded-md w-[20rem] md:w-1/3">
          <h2 class="text-[#042EFF] font-semibold mb-6 text-base md:text-xl">Activity distribution</h2>
          <canvas id="myChart4" class="w-full"></canvas>
      </div>
      </div>
    </div>
</x-admin-layout>
