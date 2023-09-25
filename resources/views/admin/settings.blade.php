<x-admin-layout>
    <div class="recent-sales bg-white p-4 rounded-md">
          <h2 class="text-[rgb(4,46,255)] font-semibold text-base md:text-xl py-4 capitalize">Active admins</h2>
          <div class="table-container overflow-x-auto">
            <table class="w-[40rem] lg:w-full border-2 my-4">
              <thead>
                <tr>
                  <th class="border-2 py-4">Admin name</th>
                  <th class="border-2 py-4">Email</th>
                  <th class="border-2 py-4">Photo</th>
                  <th class="border-2 py-4">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="border-2 py-2 px-2 text-center">Kennedy Muendo</td>
                  <td class="border-2 py-2 px-2 text-center">kennedymuendo@gmail.com</td>
                  <td class="border-2 py-2 px-2 text-center sm:px-4 md:translate-x-4 lg:translate-x-6"><img src="images/man4.jpeg" alt="An Iphone12" class="h-16 w-16 rounded-full object-cover"></td>
                  <td class="border-2 py-2 px-2 text-center"><button type="button" class="text-white bg-green-700 px-4 rounded-md py-2">Primary admin</button></td>
                </tr>
                <tr>
                  <td class="border-2 py-2 px-2 text-center">Kennedy Muendo</td>
                  <td class="border-2 py-2 px-2 text-center">kennedymuendo@gmail.com</td>
                  <td class="border-2 py-2 px-2 text-center sm:px-4 md:translate-x-4 lg:translate-x-6"><img src="images/man4.jpeg" alt="An Iphone12" class="h-16 w-16 rounded-full object-cover"></td>
                  <td class="border-2 py-2 px-2 text-center"><button type="button" class="text-white bg-[#042EFF] px-4 rounded-md py-2">Secondary admin</button></td>
                </tr>
                <tr>
                  <td class="border-2 py-2 px-2 text-center">Kennedy Muendo</td>
                  <td class="border-2 py-2 px-2 text-center">kennedymuendo@gmail.com</td>
                  <td class="border-2 py-2 px-2 text-center sm:px-4 md:translate-x-4 lg:translate-x-6"><img src="images/man4.jpeg" alt="An Iphone12" class="h-16 w-16 rounded-full object-cover"></td>
                  <td class="border-2 py-2 px-2 text-center"><button type="button" class="text-white bg-[#042EFF] px-4 rounded-md py-2">Secondary admin</button></td>
                </tr>
                <tr>
                  <td class="border-2 py-2 px-2 text-center">Kennedy Muendo</td>
                  <td class="border-2 py-2 px-2 text-center">kennedymuendo@gmail.com</td>
                  <td class="border-2 py-2 px-2 text-center sm:px-4 md:translate-x-4 lg:translate-x-6"><img src="images/man4.jpeg" alt="An Iphone12" class="h-16 w-16 rounded-full object-cover"></td>
                  <td class="border-2 py-2 px-2 text-center"><button type="button" class="text-white bg-[#042EFF] px-4 rounded-md py-2">Secondary admin</button></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="table-container overflow-x-auto">
            <table class="w-[26rem] lg:w-1/2 border-2 mt-8">
              <thead>
                <tr>
                  <th class="border-2 py-4">Manage</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="border-2 py-2 px-6 w-1/2">
                    <div class="flex w-full justify-between">
                      <button type="button" class="bg-[#FFCF10] py-3 px-8 capitalize rounded-md">message <i class="fa-solid fa-envelope pl-2"></i></button>
                      <button type="button" class="bg-gray-300 py-3 px-8 capitalize rounded-md">remove <i class="fa-solid fa-times pl-2"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="border-2 py-2 px-6 w-1/2">
                    <div class="flex w-full justify-between">
                      <button type="button" class="bg-[#FFCF10] py-3 px-8 capitalize rounded-md">message <i class="fa-solid fa-envelope pl-2"></i></button>
                      <button type="button" class="bg-[#FF4004] py-3 px-8 capitalize rounded-md">remove <i class="fa-solid fa-times pl-2"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="border-2 py-2 px-6 w-1/2">
                    <div class="flex w-full justify-between">
                      <button type="button" class="bg-[#FFCF10] py-3 px-8 capitalize rounded-md">message <i class="fa-solid fa-envelope pl-2"></i></button>
                      <button type="button" class="bg-[#FF4004] py-3 px-8 capitalize rounded-md">remove <i class="fa-solid fa-times pl-2"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="border-2 py-2 px-6 w-1/2">
                    <div class="flex w-full justify-between">
                      <button type="button" class="bg-[#FFCF10] py-3 px-8 capitalize rounded-md">message <i class="fa-solid fa-envelope pl-2"></i></button>
                      <button type="button" class="bg-[#FF4004] py-3 px-8 capitalize rounded-md">remove <i class="fa-solid fa-times pl-2"></i></button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="new-admin bg-white p-4 rounded-md my-4">
          <h2 class="text-[rgb(4,46,255)] font-semibold text-base md:text-xl py-4 capitalize">add new new admin</h2>
          <div class="new-admin-form">
            <form action="#">
                <div class="input-box">
                  <label for="email" class="block py-3">Enter the email address of the admin to be:</label>
                  <input type="text" name="email" id="email" class="px-2 py-2 rounded-md outline-none border-2 w-full focus:border-[#042EFF] transition-all duration-300 ease-in-out" autofocus>
                </div>
              <button type="submit" class="capitalize px-4 py-2 bg-[#042EFF] rounded-md text-white my-4">add new admin</button>
            </form>
          </div>
          </table>
        </div>
</x-admin-layout>
