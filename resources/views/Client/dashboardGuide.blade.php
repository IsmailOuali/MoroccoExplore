<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Document</title>
    </head>
    <body class="bg-black">
        @include('layouts.nav')
        <h1 class="text-center font-bold text-blue-800 ">Guide Dashboard</h1>
        <main class="flex">

            <section class="bg-sky-200 w-1/2">
                <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
                    <h2 class="mb-4 text-xl font-bold text-gray-900 ">Add Voyage</h2>
                    <form action="/store" method="post">
                        @csrf
                        <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                            <div class="sm:col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Voayage Name</label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500 text-white" value="Fest" placeholder="Type Voyage name" required="">
                            </div>

                            <div class="w-full">
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 ">Price</label>
                                <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500 text-white" value="29" placeholder="$29" required="">
                            </div>
                            <div class="w-full">
                                <label class="block mb-2 text-sm font-medium text-black " for="file_input">Upload file</label>
                                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-600 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" name="file" type="file">
                            </div>
                            <div>
                                <label for="Type" class="block mb-2 text-sm font-medium text-gray-900 ">Type</label>
                                <select name="Type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="Electronics">Trip</option>
                                    <option value="TV">Shop</option>
                                    <option value="PC">Sea</option>

                                </select>
                            </div>
                            <div>
                                <label for="Destination" class="block mb-2 text-sm font-medium text-gray-900 ">Destination</label>
                                <select name="Destination" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="Electronics">Agadir</option>
                                    <option value="TV">Marrakech</option>
                                    <option value="PC">Tanger</option>

                                </select>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
                                <textarea name="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500 text-white" placeholder="Write a Voyage description here..."></textarea>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <button type="submit" class="text-black bg-sky-600 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-600 dark:focus:ring-primary-800">
                                Add Voyage
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
                                <col class="w-18">
                            </colgroup>
                            <thead class="bg-gray-700">
                                <tr class="text-left">
                                    <th class="p-3">Invoice #</th>
                                    <th class="p-3">Name</th>
                                    <th class="p-3">Category</th>
                                    <th class="p-3">Destination</th>
                                    <th class="p-3 text-right">price</th>
                                    <th class="p-3">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-opacity-20 border-gray-700 bg-blue-400">
                                    <td class="p-3">
                                        <p>97412378923</p>
                                    </td>
                                    <td class="p-3">
                                        <p>Tesla Inc.</p>
                                    </td>
                                    <td class="p-3">
                                        <p>14 Jan 2022</p>
                                        <p class="text-gray-400">Friday</p>
                                    </td>
                                    <td class="p-3">
                                        <p>14 Jan 2022</p>
                                        <p class="text-gray-400">Friday</p>
                                    </td>
 
                                    <td class="p-3 text-right">
                                        <p>$275</p>
                                    </td>
                                    <td class="p-3 text-right flex gap-2">
                                        <button class="px-3 py-1 font-semibold rounded-md bg-violet-400 text-gray-900">
                                            edit
                                        </button>
                                        <button class="px-3 py-1 font-semibold rounded-md bg-violet-400 text-gray-900">
                                            delete
                                        </button>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section class="bg-sky-200 w-1/2">
                <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">

                    <form action="/storeDest" method="post">
                        @csrf
                        <div class="sm:col-span-2 p-4">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Destination name</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500 text-white" value="fest" placeholder="Type Destination name" required="">
                        </div>
                        <div class="flex items-center space-x-4 p-4">
                            <button type="submit" class="text-black bg-sky-600 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-600 dark:focus:ring-primary-800">
                                Add Destination
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
                                    @foreach ($destinations as $destination)
                                        
                                    <tr>
                                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium ">{{ $destination->id }}</td>
                                      <td class="px-6 py-4 whitespace-nowrap text-sm ">{{ $destination->name }}</td>
                                      <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">Delete</button>
                                      </td>
                                    </tr>
                                    @endforeach
                
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </section>
            <section class="bg-sky-200 w-1/2">
                <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">

                    <form action="/storeType" method="post">
                        @csrf
                        <div class="sm:col-span-2 p-4">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Type Voyage name</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500 text-white" value="fest" placeholder="Type Type Voyage name" required="">
                        </div>
                        <div class="flex items-center space-x-4 p-4">
                            <button type="submit" class="text-black bg-sky-600 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-600 dark:focus:ring-primary-800">
                                Add Type Voyage
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
                                    @foreach ($typeVoyages as $TypeVoyage)
                                        
                                    <tr>
                                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium ">{{ $TypeVoyage->id }}</td>
                                      <td class="px-6 py-4 whitespace-nowrap text-sm ">{{ $TypeVoyage->name }}</td>
                                      <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">Delete</button>
                                      </td>
                                    </tr>
                                    @endforeach
                
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </section>
        </main>
        @include('layouts.footer')
    </body>
</html>