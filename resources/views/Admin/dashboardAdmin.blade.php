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
                  <h2 class="title-font font-medium sm:text-4xl text-3xl text-gray-900">{{ $users->count() }}</h2>
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
            <div>
              
              <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700 ">
                <thead>
                  <tr>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium  uppercase ">Nom</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium  uppercase ">Email</th>
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium  uppercase ">Action</th>
                  </tr>
                </thead>
                <tbody class="divide-y ">
                  @if ($users->isNotEmpty())
                  @foreach ($users as $user)
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium ">{{ $user->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm ">{{ $user->email }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                      <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">Delete</button>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
          @else
              <p>No users found.</p>
          @endif
          
            </div>
        </section>
        @include('layouts.footer')
    </body>
</html>