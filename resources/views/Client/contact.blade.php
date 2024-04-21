<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>Contact Us</title>
    </head>
    <body class="bg-black">
        
        @include('layouts.nav')

        <section class="min-h-screen bg-cover " style="background-image: url('https://images.pexels.com/photos/774835/pexels-photo-774835.jpeg?auto=compress&cs=tinysrgb&w=600')">
            <div class="backdrop-blur-md    flex flex-col min-h-screen bg-black/50">
                <div class=" container flex flex-col flex-1 px-6 py-12 mx-auto">
                    <div class="  flex-1 lg:flex lg:items-center lg:-mx-6">
        
                        <div class="mt-8 lg:w-1/2 lg:mx-6">
                            <div class="w-full px-8 py-10 mx-auto overflow-hidden bg-white shadow-2xl rounded-xl dark:bg-sky-900 lg:max-w-xl">
                                <h1 class="text-xl font-medium text-gray-700 dark:text-gray-200">Contact form</h1>
        
                                <p class="mt-2 text-gray-500 dark:text-gray-400">
                                    Ask us everything and we would love
                                    to hear from you
                                </p>
        
                                <form class=" mt-6">
                                    <div class="flex-1">
                                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Full Name</label>
                                        <input type="text" placeholder="John Doe" class="block w-full px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md " />
                                    </div>
        
                                    <div class="flex-1 mt-6">
                                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email address</label>
                                        <input type="email" placeholder="johndoe@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md " />
                                    </div>
        
                                    <div class="w-full mt-6">
                                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Message</label>
                                        <textarea class="block w-full h-32 px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md md:h-48 " placeholder="Message"></textarea>
                                    </div>
        
                                    <button class="w-full px-6 py-3 mt-6 text-sm font-medium tracking-wide  capitalize transition-colors duration-300 transform bg-sky-500 rounded-md  text-black hover:text-white hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-70">
                                        get in touch
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('layouts.footer')

    </body>
</html>