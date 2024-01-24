<x-app-layout>
<section class="signup-home px-[4%] mt-16 mx-auto lg:max-w-[1500px]">
        <div
        class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
      >
        My<span class="text-[#68A4FE] px-2"> orders</span>
      </div>
      <div class="checkout-container flex flex-col md:flex-row w-full gap-2 md:gap-4">
            <div class="signup-box h-[450px] lg:h-auto w-full mx-auto">
                @foreach ($orders as $orderItem)
                <h2 class="title text-base sm:text-lg font-semibold text-center py-4 border-b-2 text-[#384857]">Order Details</h2>
                <table class="border-2 my-4 w-full p-6 rounded-xl mt-10 sm:mt-16">
                    <thead>
                        <tr>
                            <th class="border-2 py-2 text-xs sm:text-base">Name</th>
                            <th class="border-2 py-2 text-xs sm:text-base">Quantity</th>
                            <th class="border-2 py-2 text-xs sm:text-base">Price</th>
                        </tr>
                    </thead>
                <tbody>
                @php

                $grandTotal = 0;

                $totalItems = 0;

                @endphp
                @foreach ($orderItem->orderitems as $item)
                  <tr>
                    <td class="border-2 py-2 px-2 text-xs sm:text-sm">{{ $item->product->productName}}</td>
                    <td class="border-2 py-2 text-center px-2 text-xs sm:text-sm">{{ $item->Quantity}}</td>
                    <td class="border-2 py-2 text-center px-2 text-xs sm:text-sm">${{ number_format($item->product->discountPrice)}}</td>
                  </tr>
                  @php

                    $grandTotal += $item->product->discountPrice  * ($item->Quantity);

                    $totalItems += $item->Quantity;

                    @endphp

                    @endforeach
                    <tr>
                        <th class="border-2 py-2 px-2 text-xs sm:text-sm">Total</th>
                        <th class="border-2 py-2 px-2 text-xs sm:text-sm">{{ number_format($totalItems)}}</th>
                        <th class="border-2 py-2 px-2 text-xs sm:text-sm">${{ number_format($grandTotal)}}</th>
                    </tr>
                    </tbody>
                    </table>
                @endforeach
    </div>
</div>

<div class="input-box input-responsive my-4 mt-8">
    <button type="submit" class="text-center px-4 py-2 text-sm md:text-base rounded-md text-white bg-[#68a4fe] hover:bg-[#384857] transition-all duration-300 ease-in-out">Place Order</button>
</div>
</form>
</section>
</x-app-layout>
