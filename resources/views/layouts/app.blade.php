<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/script.js', 'resources/js/homeSlider.js'])
            <!-- The font-awesome CDN link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    </head>
    <body class="font-sans antialiased">
    <header
      class="fixed z-10 top-0 right-0 left-0 bg-[#68A4FE] shadow-[0_6px_12px_rgba(56,72,87,0.5)]"
    >
      <section
        class="flex justify-between items-center px-[4%] mx-auto lg:max-w-[1500px] outline-1 outline-black"
      >
        <div class="text-2xl font-semibold sm:font-extrabold text-white">MoTech</div>
        <div>
          <button id="humbuger-btn" class="humbuger-btn text-white font-bold cursor-pointer text-3xl p-4 fa-solid fa-bars"></button>
        </div>
        <div class="mobile-menu-navigation-bar bg-[#68A4FE] absolute top-[3.9rem] right-0  z-50 h-screen">
          <a
          href="index.html"
          class="block py-4 px-6  text-white capitalize hover:bg-[#384857] transition-all duration-300 ease-in-out"
          >Home</a
        >
        <a
          href="about.html"
          class="block py-4 px-6  text-white capitalize hover:bg-[#384857] transition-all duration-300 ease-in-out"
          >About</a
        >
        <a
          href="products.html"
          class="block py-4 px-6  text-white capitalize hover:bg-[#384857] transition-all duration-300 ease-in-out"
          >Products</a
        >
        <a
          href="contact.html"
          class="block py-4 px-6  text-white capitalize hover:bg-[#384857] transition-all duration-300 ease-in-out"
          >contact</a
        >
        <a
          href="cart.html"
          class="cart-link  flex items-center text-white capitalize ease-in-ou gap-8 px-6 mt-4"
          >cart<span class="cart-btn"
            ><i class="fa-solid fa-cart-shopping"></i
            ><span class="count">0</span></span
          ></a
        >
        </div>
        <nav class="primary-navigation-bar flex items-center justify-between">
          <a
            href="index.html"
            class="py-4 px-3 text-white capitalize hover:bg-[#384857] transition-all duration-300 ease-in-out"
            >Home</a
          >
          <a
            href="about.html"
            class="py-4 px-3 text-white capitalize hover:bg-[#384857] transition-all duration-300 ease-in-out"
            >About</a
          >
          <a
            href="products.html"
            class="py-4 px-3 text-white capitalize hover:bg-[#384857] transition-all duration-300 ease-in-out"
            >Products</a
          >
          <a
            href="contact.html"
            class="py-4 px-3 text-white capitalize hover:bg-[#384857] transition-all duration-300 ease-in-out"
            >contact</a
          >
          <a
            href="cart.html"
            class="cart-link flex items-center px-3 text-white capitalize ease-in-ou"
            >cart<span class="cart-btn"
              ><i class="fa-solid fa-cart-shopping"></i
              ><span class="count">0</span></span
            ></a
          >
        </nav>
      </section>
    </header>
    <main  class="scroll-pt-32 menu-toggle">
      <!-- The landing page home page section -->
      {{ $slot }}

    </main>
    <footer class="bg-[#384857] px-[4%] pt-6 sm:pt-10 mt-8 mx-auto lg:max-w-[1500px]">
      <div
        class="footer-box gap-10 grid footer-grid border-b py-4 sm:py-8 border-[#8DAFCF]"
      >
        <div class="footer-box flex flex-col">
          <div
            class="box-heading text-white py-6 text-xl font-semibold capitalize"
          >
            Quick Links
          </div>
          <a href="index.html" class="text-[#8DAFCF] py-1 text-sm hover:text-[#68A4FE]"
            >Home</a
          >
          <a href="about.html" class="text-[#8DAFCF] py-1 text-sm hover:text-[#68A4FE]"
            >About us</a
          >
          <a href="products.html" class="text-[#8DAFCF] py-1 text-sm hover:text-[#68A4FE]"
            >Products</a
          >
          <a href="cart.html" class="text-[#8DAFCF] py-1 text-sm hover:text-[#68A4FE]"
            >Cart</a
          >
        </div>
        <div class="footer-box flex flex-col">
          <div
            class="box-heading text-white py-6 text-xl font-semibold capitalize"
          >
            Social media
          </div>
          <a href="#" class="text-[#8DAFCF] py-1 text-sm hover:text-[#68A4FE]"
            >Facebook</a
          >
          <a href="#" class="text-[#8DAFCF] py-1 text-sm hover:text-[#68A4FE]"
            >Twitter</a
          >
          <a href="#" class="text-[#8DAFCF] py-1 text-sm hover:text-[#68A4FE]"
            >Instagram</a
          >
          <a href="#" class="text-[#8DAFCF] py-1 text-sm hover:text-[#68A4FE]"
            >Pinterest</a
          >
        </div>
        <div class="footer-box flex flex-col">
          <div
            class="box-heading text-white py-6 text-xl font-semibold capitalize"
          >
            MoTech
          </div>
          <p class="text-sm text-[#8DAFCF]">
            Eius Vel Sequi Maiores Atque Voluptates Fugiat. Aut Fugit Nobis
          </p>
        </div>
        <div class="footer-box flex flex-col">
          <div class="box-heading text-white py-6 text-xl font-semibold">
            Newsletter
          </div>
          <div class="input-box flex w-full relative h-10">
            <input
              type="text"
              name="newsletter-email"
              placeholder="Enter your email"
              class="w-full h-full outline-none rounded-md px-3 text-xs pr-24"
            />
            <button type="submit" class="absolute bg-[#68A4FE] py-2 px-3 text-xs top-1/2 -translate-y-1/2 text-white capitalize rounded-md right-[0.325rem] hover:bg-[#384857] transtion-all duration-300 ease-in-out">
              subscribe
            </button>
          </div>
          <p class="text-sm text-[#8DAFCF] py-3">
            Subscribe to receive product updates
          </p>
          <div class="social-icons flex gap-10 text-[#8DAFCF] my-3">
            <a href="#" class="hover:text-white"
              ><i class="fa-brands fa-facebook-f"></i
            ></a>
            <a href="#" class="hover:text-white"
              ><i class="fa-brands fa-x-twitter"></i
            ></a>
            <a href="#" class="hover:text-white"
              ><i class="fa-brands fa-instagram"></i
            ></a>
            <a href="#" class="hover:text-white"
              ><i class="fa-brands fa-pinterest"></i
            ></a>
          </div>
        </div>
        <div class="footer-box flex flex-col">
          <div
            class="box-heading text-white py-6 text-xl font-semibold capitalize"
          >
            Account
          </div>
          <a href="signup.html" class="text-[#8DAFCF] py-1 text-sm hover:text-[#68A4FE]"
            >Signup</a
          >
          <a href="login.html" class="text-[#8DAFCF] py-1 text-sm hover:text-[#68A4FE]"
            >Login</a
          >
          <a href="cart.html" class="text-[#8DAFCF] py-1 text-sm hover:text-[#68A4FE]"
            >Wishlist</a
          >
          <a href="#" class="text-[#8DAFCF] py-1 text-sm hover:text-[#68A4FE]"
            >Newsletters</a
          >
        </div>
        <div class="footer-box flex flex-col">
          <div
            class="box-heading text-white py-6 text-xl font-semibold capitalize"
          >
            more links
          </div>
          <a href="#" class="text-[#8DAFCF] py-1 text-sm hover:text-[#68A4FE]"
            >Delivery Information</a
          >
          <a href="#" class="text-[#8DAFCF] py-1 text-sm hover:text-[#68A4FE]"
            >Terms & Conditions</a
          >
          <a href="#" class="text-[#8DAFCF] py-1 text-sm hover:text-[#68A4FE]"
            >Privacy Policy</a
          >
          <a href="#" class="text-[#8DAFCF] py-1 text-sm hover:text-[#68A4FE]"
            >Contact us</a
          >
        </div>
      </div>
      <div
        class="copyright-text text-center text-[#8DAFCF] text-sm py-6 capitalize"
      >
        &#169; official website of MoTech | all rights reserved
      </div>
    </footer>
    <script src="js/script.js"></script>
    <script src="js/homeSlider.js"></script>
    </body>
</html>