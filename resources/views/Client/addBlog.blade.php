<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>Add Blog</title>
    </head>
    <body class="">
        @include('layouts.nav')

        <section class="bg-sky-200 w-full">
            <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">

                <form action="/storeCat" method="post">
                    @csrf
                    <div class="sm:col-span-2 p-4">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Blog name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500 text-white" value="Amlu&ldquo;" placeholder="Type category name" required="">
                    </div>
                    <div class="sm:col-span-2 p-4">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Blog Description</label>
                        <textarea type="text" name="description" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500 text-white" value="Amlu&ldquo;" placeholder="Type category name" required="">
                    </div>
                    <div class="flex items-center space-x-4 p-4">
                        <button type="submit" class="text-black bg-sky-600 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-600 dark:focus:ring-primary-800">
                            Add blog
                        </button>
                    </div>
                </form>
                <div class="flex flex-col bg-gray-200 text-black">
                    <div class="-m-1.5 overflow-x-auto">
                      <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden rounded">
                          <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700 ">
                            <thead>
                              <tr>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium  uppercase ">ID</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium  uppercase ">Name</th>
                                <th scope="col" class="px-6 py-3 text-end text-xs font-medium  uppercase ">Action</th>
                              </tr>
                            </thead>
                            <tbody class="divide-y ">
                                    
                                <tr>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium ">l,fd</td>
                                  <td class="px-6 py-4 whitespace-nowrap text-sm ">fs</td>
                                  <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <form action="" method="POST">
                                            <button type="submit" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">Delete</button>
                                        </form>
                                    </td>
                                </tr>
            
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </section>
        @include('layouts.footer')
    </body>
</html>