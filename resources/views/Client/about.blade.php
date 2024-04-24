<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>About</title>
    </head>
    <body class="bg-black">

        @include('layouts.nav')

        <div class="sm:flex items-center h-screen bg-blue-200">
            <div class="sm:w-1/2 p-10">
                <div class="image object-center text-center">
                    <img src="/images/logo.png">
                </div>
            </div>
            <div class="sm:w-1/2 p-5">
                <div class="text">
                    <span class="text-gray-500 border-b-2 border-indigo-600 uppercase">About us</span>
                    <h2 class="my-4 font-bold text-3xl  sm:text-4xl ">About <span class="text-indigo-600">Our Company</span>
                    </h2>
                    <p class="text-gray-700">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, commodi
                        doloremque, fugiat illum magni minus nisi nulla numquam obcaecati placeat quia, repellat tempore
                        voluptatum.
                    </p>
                </div>
            </div>
        </div>

        @include('layouts.footer')
        
    </body>
</html>