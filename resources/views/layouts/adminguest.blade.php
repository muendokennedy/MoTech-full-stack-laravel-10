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
        <!-- The custom css link -->
        @vite(['resources/css/admin.css', 'resources/js/admin/adminImageBrowser.js'])
    </head>
  <body>
    <section class="min-h-screen">
      <main class="bg-[#E4E7F3] pt-20 px-[3%] pb-4 min-h-screen">
        {{ $slot }}
      </main>
    </section>
  </body>
</html>
