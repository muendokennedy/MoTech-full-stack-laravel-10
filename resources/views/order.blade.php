<x-app-layout>
<section class="signup-home px-[4%] mt-16 mx-auto lg:max-w-[1500px]">
        <div
        class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
      >
        View order<span class="text-[#68A4FE] px-2"> here</span>
      </div>
      <form action="{{route('order.place')}}" method="POST" autocomplete="off">
      <div class="checkout-container flex flex-col md:flex-row w-full gap-2 md:gap-4">
          <div class="signup-box h-auto w-full md:w-1/4 mx-auto border-2 p-6 rounded-xl mt-10 sm:mt-16 shadow-[5px_5px_15px_8px_rgba(56,72,87,0.2)]">
          @csrf
              <h2 class="title text-base sm:text-lg font-semibold text-center py-4 border-b-2 text-[#384857]">Personal details</h2>
                <div class="input-box my-4 w-full">
                  <div  class="block pb-3 text-[#384857] text-sm md:text-base capitalize">First name:</div>
                  <div class="sm:text-base border-2 py-2 px-2 w-full rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">{{ $order->firstName}}</div>
                </div>
                <div class="input-box my-4 w-full">
                  <div  class="block pb-3 text-[#384857] text-sm md:text-base capitalize">Last name:</div>
                  <div class="sm:text-base border-2 py-2 px-2 w-full rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">{{ $order->lastName}}</div>
                </div>
                <div class="input-box my-4 w-full]">
                  <div  class="block pb-3 text-[#384857] text-sm md:text-base capitalize">Email Address:</div>
                  <div class="sm:text-base overflow-x-auto border-2 py-2 px-2 w-full rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">{{ $order->email}}</div>
                </div>
                <div class="input-box my-4 w-full">
                  <div  class="block pb-3 text-[#384857] text-sm md:text-base capitalize">Phone Number:</div>
                  <div class="sm:text-base border-2 py-2 px-2 w-full rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">{{ $order->phone}}</div>
                </div>

                <div class="input-box my-4 w-full">
                  <div  class="block pb-3 text-[#384857] text-sm md:text-base capitalize">Firs Address:</div>
                  <div class="sm:text-base border-2 py-2 px-2 w-full rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">{{ $order->address1}}</div>
                </div>
                <div class="input-box my-4 w-full">
                  <div  class="block pb-3 text-[#384857] text-sm md:text-base capitalize">Second Address:</div>
                  <div class="sm:text-base border-2 py-2 px-2 w-full rounded-md focus:border-[#68A4FE] transition-all duration-300 ease-in-out">{{ $order->address2}}</div>
                </div>
            </div>
            <div class="signup-box h-[450px] lg:h-auto w-full md:w-3/4 mx-auto border-2 p-6 rounded-xl mt-10 sm:mt-16 shadow-[5px_5px_15px_8px_rgba(56,72,87,0.2)]">
                <h2 class="title text-base sm:text-lg font-semibold text-center py-4 border-b-2 text-[#384857]">Order Details</h2>
                <table class="border-2 my-4 w-full">
                    <thead>
                  <tr>
                      <th class="border-2 py-2 text-xs sm:text-base">Name</th>
                      <th class="border-2 py-2 text-xs sm:text-base">Quantity</th>
                      <th class="border-2 py-2 text-xs sm:text-base">Image</th>
                      <th class="border-2 py-2 text-xs sm:text-base">Price</th>
                  </tr>
                </thead>
                @php

                $grandTotal = 0;

                $totalItems = 0;

                @endphp
                <tbody>

                    @foreach ($order->orderitems as $item)

                    <tr>
                        <td class="border-2 py-2 px-2 text-xs sm:text-sm">{{ $item->product->productName}}</td>
                        <td class="border-2 py-2 text-center px-2 text-xs sm:text-sm">{{ $item->Quantity}}</td>
                        <td class="border-2 py-2 px-2 text-center md:px-4 w-32"><img src="{{asset('/storage/' . $item->product->firstImage)}}" alt="A dell laptop" class="h-14 w-auto"></td>
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
                    <th class="border-2 py-2 px-2 text-xs sm:text-sm text-right" colspan="2">${{ number_format($grandTotal)}}</th>
                </tr>
            </tbody>
        </table>
        <div class="grandtotal flex justify-between mt-3">
            <p class="font-semibold text-lg">Grand Total:</p>
            <p class="font-semibold text-lg">${{ number_format($grandTotal)}}</p>
        </div>
        <input type="hidden" name="totalPrice" value={{$grandTotal}}>
    </div>
</div>

</form>
</section>
</x-app-layout>

