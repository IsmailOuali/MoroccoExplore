<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>Admin dashboard</title>
    </head>
    <body class="bg-black">
        @include('layouts.nav')

        <section class="text-gray-600 body-font bg-blue-200">
            <div class="container px-5 py-24 mx-auto">
              <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 sm:w-1/4 w-1/2">
                  <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">2.7K</h2>
                  <p class="leading-relaxed">Users</p>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                  <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">1.8K</h2>
                  <p class="leading-relaxed">Produits</p>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                  <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">35</h2>
                  <p class="leading-relaxed">Voyages</p>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                  <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">4</h2>
                  <p class="leading-relaxed">Destinations</p>
                </div>
              </div>
            </div>
        </section>
        @include('layouts.footer')
    </body>
</html>