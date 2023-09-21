<x-app-layout>
<section class="contact-home pt-16 px-[4%] mx-auto lg:max-w-[1500px]">
        <div
        class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
      >
        get in<span class="text-[#68A4FE] px-2">touch</span>
      </div>
        <div class="contact-text py-4 text-sm sm:text-base">
          Lorem Ipsum Dolor, Sit Amet Consectetur Adipisicing Elit. Laboriosam,
          Corrupti Numquam. Nemo Ducimus Voluptate Laboriosam Eaque Soluta
          Nesciunt Nobis Commodi!
        </div>
        <form action="#" method="POST">
          <div class="contact-form my-2">
            <div class="input-row flex flex-col sm:flex-row justify-between items-center">
              <div class="input-box w-full sm:basis-[48%] my-2">
                <label for="name" class="block mb-2 text-sm sm:text-base">Enter your name:</label>
                <input
                  type="text"
                  name="name"
                  autofocus
                  id="name"
                  class="text-sm sm:text-base px-4 py-2 outline-none border-2 rounded-md focus:border-[#68a4fe] w-full transition-all duration-300 ease-in-out"
                />
              </div>
              <div class="input-box w-full sm:basis-[48%] my-2">
                <label for="email" class="block mb-2 text-sm sm:text-base">Enter your email:</label>
                <input
                  type="text"
                  name="email"
                  id="email"
                  class="text-sm sm:text-base px-4 py-2 outline-none border-2 rounded-md focus:border-[#68a4fe] w-full transition-all duration-300 ease-in-out"
                />
              </div>
            </div>
            <div class="input-row flex flex-col sm:flex-row justify-between items-center">
              <div class="input-box w-full sm:basis-[48%] my-2">
                <label for="number" class="block mb-2 text-sm sm:text-base"
                  >Enter your number:</label
                >
                <input
                  type="text"
                  name="number"
                  id="number"
                  class="text-sm sm:text-base px-4 py-2 outline-none border-2 rounded-md focus:border-[#68a4fe] w-full transition-all duration-300 ease-in-out"
                />
              </div>
              <div class="input-box w-full sm:basis-[48%] my-2">
                <label for="subject" class="block mb-2 text-sm sm:text-base"
                  >Enter your subject:</label
                >
                <input
                  type="text"
                  name="subject"
                  id="subject"
                  class="text-sm sm:text-base px-4 py-2 outline-none border-2 rounded-md focus:border-[#68a4fe] w-full transition-all duration-300 ease-in-out"
                />
              </div>
            </div>
            <div class="input-box my-2 text-sm sm:text-base">
              <label for="message" class="block mb-2">Enter your message</label>
              <textarea
                class="text-sm sm:text-base px-4 py-2 outline-none border-2 rounded-md focus:border-[#68a4fe] w-full transition-all duration-300 ease-in-out"
                name="message"
                id="message"
                cols="30"
                rows="5"
              ></textarea>
            </div>
            <div class="input-box my-2">
              <button
                type="submit"
                class="text-white bg-[#68a4fe] py-2 px-4 rounded-md capitalize text-sm sm:text-lg hover:bg-[#384857] transition-all duration-300 ease-in-out"
              >
                send message
              </button>
            </div>
          </div>
        </form>
      </section>
      <section class="location mx-auto px-[4%] my-4 mb-12">
        <div
        class="heading text-[#384857] border-b-2 text-base sm:text-xl font-semibold py-2 sm:py-4 capitalize"
      >
        where to <span class="text-[#68A4FE] px-2">find us</span>
      </div>
        <div class="location-content my-4">
          <div class="location-text text-sm sm:text-base">
            Iure omnis explicabo praesentium. Aut tenetur enim aperiam quibusdam
            sunt enim quidem aperiam sit. Quos qui id. Vitae adipisci vitae
            maxime architecto reiciendis nihil est. Sit maiores quibusdam.
            Voluptatem dolorem omnis suscipit. Nulla id voluptatem. Sed fugit
            explicabo dolores quaerat quod voluptatem eos sed. Consequatur optio
            corporis provident. Sed voluptas mollitia magni expedita dolorem
            quod qui necessitatibus. Reiciendis sequi est ev eniet sit.
          </div>
          <div class="location-map my-4 h-[24rem] sm:h-[28.125rem]">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8012810472724!2d36.79350027393764!3d-1.2937166356321306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10bdadb89515%3A0x5653fe45e4a1ea56!2sThe%20Nairobi%20Womens%20Hospital-Hurlingham!5e0!3m2!1sen!2ske!4v1693299283614!5m2!1sen!2ske"
              referrerpolicy="no-referrer-when-downgrade"
              class="w-full h-full"
            ></iframe>
          </div>
        </div>
        <div class="address-container flex flex-col sm:flex-row items-center justify-between gap-4 mt-12">
          <div
            class="address-box text-center w-full sm:w-1/3 border-2 rounded-md flex justify-center items-center flex-col gap-4 p-4 shadow-[4px_4px_10px_rgba(56,72,87,0.5)]"
          >
            <div class="address-head text-2xl font-semibold text-[#536474]">
              Address
            </div>
            <div class="address-icon">
              <i class="fa-solid fa-address-book text-[#536474] text-4xl"></i>
            </div>
            <div class="address-content text-[#536474]">
              PO BOX 45-78383, <br />
              Nairobi, Kenya
            </div>
          </div>
          <div
            class="address-box text-center w-full sm:w-1/3 border-2 rounded-md flex justify-center items-center flex-col gap-4 p-4 shadow-[4px_4px_10px_rgba(56,72,87,0.5)]"
          >
            <div class="address-head text-2xl font-semibold text-[#536474]">
              Email
            </div>
            <div class="address-icon">
              <i class="fa-solid fa-envelope text-[#536474] text-4xl"></i>
            </div>
            <div class="address-content text-[#536474]">
              <p>motech@gmail.com</p>
              <p>motech117@gmail.com</p>
            </div>
          </div>
          <div
            class="address-box text-center w-full sm:w-1/3 border-2 rounded-md flex justify-center items-center flex-col gap-4 p-4 shadow-[4px_4px_10px_rgba(56,72,87,0.5)]"
          >
            <div class="address-head text-2xl font-semibold text-[#536474]">
              Phone
            </div>
            <div class="address-icon">
              <i class="fa-solid fa-phone text-[#536474] text-4xl"></i>
            </div>
            <div class="address-content text-[#536474]">
              <p>+123-456-7890</p>
              <p>+111-222-3333</p>
            </div>
          </div>
        </div>
      </section>
</x-app-layout>
