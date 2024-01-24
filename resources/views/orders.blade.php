<x-app-layout>
<section class="signup-home px-[4%] mt-16 mx-auto lg:max-w-[1500px]">
        <div
        class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
      >
        My<span class="text-[#68A4FE] px-2"> orders</span>
      </div>
      <div class="checkout-container flex flex-col md:flex-row w-full gap-2 md:gap-4">
            <div class="signup-box h-[450px] lg:h-auto w-full mx-auto">
                <table class="border-2 my-4 w-full p-6 rounded-xl mt-6 sm:mt-10">
                    <thead>
                        <tr>
                            <th class="border-2 py-2 text-xs sm:text-base">Order Date</th>
                            <th class="border-2 py-2 text-xs sm:text-base">Tracking Number</th>
                            <th class="border-2 py-2 text-xs sm:text-base">Total price</th>
                            <th class="border-2 py-2 text-xs sm:text-base">Status</th>
                            <th class="border-2 py-2 text-xs sm:text-base">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $orderItem)
                        <tr>
                          <td class="border-2 py-2 text-center px-2 text-xs sm:text-sm">{{ $orderItem->created_at}}</td>
                          <td class="border-2 py-2 text-center px-2 text-xs sm:text-sm">{{ $orderItem->trackingNumber}}</td>
                          <td class="border-2 py-2 text-center px-2 text-xs sm:text-sm">$ {{ number_format($orderItem->totalPrice) }}</td>
                          <td class="border-2 py-2 text-center px-2 text-xs sm:text-sm">{{ $orderItem->status == '0' ? 'Pending' : 'Delivered'}}</td>
                          <td class="border-2 py-2 text-center px-2 text-xs sm:text-sm"><a href="{{route('order.view', $orderItem)}}" class="text-center px-4 py-1 text-sm md:text-base rounded-md text-white bg-[#68a4fe] hover:bg-[#384857] transition-all duration-300 ease-in-out">View order</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
    </div>
</div>

<div class="input-box input-responsive my-4 mt-8">
    <button type="submit" class="text-center px-4 py-2 text-sm md:text-base rounded-md text-white bg-[#68a4fe] hover:bg-[#384857] transition-all duration-300 ease-in-out">Place Order</button>
</div>
</form>
</section>
</x-app-layout>
