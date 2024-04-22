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
        <section class="bg-blue-200 w-1/2">
            <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
                <h2 class="mb-4 text-xl font-bold text-gray-900 ">Add Blog</h2>
                <form action="/store" method="post">
                    @csrf
                    <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                        <div class="sm:col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Blog Name</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500 text-white" value="Amlu&ldquo;" placeholder="Type Blog name" required="">
                        </div>

                        <div class="w-full">
                            <label class="block mb-2 text-sm font-medium text-black " for="file_input">Upload file</label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-600 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" name="file" type="file">
                        </div>


                        <div class="sm:col-span-2">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
                            <textarea name="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500 text-white" placeholder="Write a Blog description here..."></textarea>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button type="submit" class="text-black bg-sky-600 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-600 dark:focus:ring-primary-800">
                            Add Blog
                        </button>
                    </div>
                </form>
            </div>
            <div class="container p-2 mx-auto sm:p-4 text-gray-100">
                <h2 class="mb-4 text-2xl font-semibold leading-tigh text-black">Invoices</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-xs">
                        <colgroup>
                            <col>
                            <col>
                            <col class="">
                            <col class="w-18">
                        </colgroup>
                        <thead class="bg-gray-700">
                            <tr class="text-left">
                                <th class="p-3">Invoice #</th>
                                <th class="p-3">Name</th>
                                <th class="p-3">Description</th>
                                <th class="p-3">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-opacity-20 border-gray-700 bg-blue-400 w-full">
                                <td class="p-3">
                                    <p>1</p>
                                </td>
                                <td class="p-3">
                                    <p>Product name</p>
                                </td>
                                <td class="p-3">
                                    <p>Category</p>
                                </td>

                                <td class="p-3 text-right flex gap-2">
                                    <button class="px-3 py-1 font-semibold rounded-md bg-violet-400 text-gray-900">
                                        edit
                                    </button>
                                    <form action="" method="post">
                                        <button type="submit" class="px-3 py-1 font-semibold rounded-md bg-violet-400 text-gray-900">
                                            delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                                


                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    </body>
</html>