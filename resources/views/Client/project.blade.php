<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <script src="https://cdn.tailwindcss.com"></script>

        <title>Projects</title>
    </head>
    <body class="bg-black">
        <nav>
            @include('layouts.nav')
        </nav>
        <section class="text-gray-600 body-font bg-blue-200">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 bg-blue-400 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/720x400" alt="blog">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
                                <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                <div>
                                    <a class="text-white hover:bg-blue-800 rounded underline" href="">Click here for Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 bg-blue-400 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/720x400" alt="blog">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
                                <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                <div>
                                    <a class="text-white hover:bg-blue-800 rounded underline" href="">Click here for Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 bg-blue-400 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/720x400" alt="blog">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
                                <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                <div>
                                    <a class="text-white hover:bg-blue-800 rounded underline" href="">Click here for Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </section>

        @include('layouts.footer')
        
    </body>
</html>