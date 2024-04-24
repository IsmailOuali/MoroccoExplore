<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>MoroccoExplorer Shop</title>
    
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>

        <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">

        <style>


            .work-sans {
                font-family: 'Work Sans', sans-serif;
            }
                
            #menu-toggle:checked + #menu {
                display: block;
            }
        
            .hover\:grow {
                transition: all 0.3s;
                transform: scale(1);
            }
        
            .hover\:grow:hover {
                transform: scale(1.02);
            }
        
            .carousel-open:checked + .carousel-item {
                position: static;
                opacity: 100;
            }
        
            .carousel-item {
                -webkit-transition: opacity 0.6s ease-out;
                transition: opacity 0.6s ease-out;
            }
        
            #carousel-1:checked ~ .control-1,
            #carousel-2:checked ~ .control-2,
            #carousel-3:checked ~ .control-3 {
                display: block;
            }
        
            .carousel-indicators {
                list-style: none;
                margin: 0;
                padding: 0;
                position: absolute;
                bottom: 2%;
                left: 0;
                right: 0;
                text-align: center;
                z-index: 10;
            }
        
            #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
            #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
            #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
                color: #000;
                /*Set to match the Tailwind colour you want the active one to be */
            }
        </style>

    </head>

    <body class="bg-black">

        @include('layouts.nav')


        <div class="carousel relative container mx-auto overflow-x-hidden" style="">
            <div class="carousel-inner relative overflow-hidden w-full">
                <!--Slide 1-->
                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                <div class="carousel-item absolute " style="height:70vh;">
                    <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 opacity-50 md:items-center bg-cover bg-right" style="background-image: url('https://media.gettyimages.com/id/962090794/fr/photo/selection-of-spices-on-a-traditional-moroccan-market.jpg?s=612x612&w=0&k=20&c=JgJLAJdru50gL9teHJRcLUdrePmvQMLDOYgmhqIelGk=');">
                    </div>
                </div>
                <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-white hover:text-white rounded-full hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-white hover:text-white rounded-full hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                <!--Slide 2-->
                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item absolute opacity-0" style="height:70vh;">
                    <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center opacity-50 bg-cover bg-bottom" style="background-image: url('https://img.freepik.com/photos-gratuite/elegante-theiere-argent-verres-dores_181624-9065.jpg?size=626&ext=jpg&ga=GA1.1.122151580.1710460600&semt=sph');">

                        <div class="container mx-auto">
                            <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                                <p class="text-black text-2xl my-4">Real Bamboo Wall Clock</p>
                                <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>
                            </div>
                        </div>

                    </div>
                </div>
                <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full  hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                <!--Slide 3-->
                <input class="carousel-open bg-white" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item absolute " style="height:70vh;">
                    <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center opacity-50" style="background-image: url('https://c8.alamy.com/comp/KPGA1H/clothing-shop-marrakech-morocco-KPGA1H.jpg');">

                        <div class="container mx-auto">
                            <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                                <p class="text-white text-2xl font-bold my-4">Jellaba</p>
                            </div>
                        </div>

                    </div>
                </div>
                <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                <ol class="carousel-indicators">
                    <li class="inline-block mr-3">
                        <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                    </li>
                    <li class="inline-block mr-3">
                        <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                    </li>
                    <li class="inline-block mr-3">
                        <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                    </li>
                </ol>

            </div>
        </div>


        <section class="bg-blue-200 py-8">

            <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

                <nav id="store" class="w-full top-0 py-1">
                    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

                        <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-3xl " href="#">
                        Store
                        </a>

                        <div class="flex items-center " id="store-nav-content">

                            <div class="pl-3 inline-block no-underline hover:text-black">
                                <input class="mx-8 ml-3 h-10 pr-2 bg-gray-200 rounded text-2xl font-semibold border-none " type="text" placeholder="Search...">
                                <button class="bg-red-200 p-2 w-24 m-auto text-black font-semibold text-xl border border-black rounded-full hover:bg-red-400">Search</button>
                            </div>


                            <select class="pl-3 inline-block bg-gray-200 rounded mx-4 pr-8 text-2xl font-semibold" href="#">
                                <option value="Categories">Categories</option>
                            </select>

                            <div class="">
                                <a class="bg-green-400 p-2 text-2xl font-semibold  rounded-xl text-center hover:bg-green-500" href="{{ route('panier') }}">Mon Panier</a>
                            </div>

                        </div>
                </div>
                </nav>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="https://st.depositphotos.com/1563627/2323/i/380/depositphotos_23231784-stock-photo-different-ceramic-tajines-with-food.jpg">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Product Name</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">£9.99</p>
                    </a>
                </div>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="https://img.freepik.com/photos-gratuite/elegante-theiere-argent-verres-dores_181624-9065.jpg?size=626&ext=jpg&ga=GA1.1.122151580.1710460600&semt=sph">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Product Name</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">£9.99</p>
                    </a>
                </div>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="https://st2.depositphotos.com/2369507/8210/i/380/depositphotos_82107266-stock-photo-beautiful-tajines-in-moroccoafrica.jpg">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Product Name</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">£9.99</p>
                    </a>
                </div>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRW7LPKavnKAJ5ldXAehCXYwPGsrRzFbSrPjw&s">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Product Name</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">£9.99</p>
                    </a>
                </div>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRW7LPKavnKAJ5ldXAehCXYwPGsrRzFbSrPjw&s">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Product Name</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">£9.99</p>
                    </a>
                </div>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRW7LPKavnKAJ5ldXAehCXYwPGsrRzFbSrPjw&s">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Product Name</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">£9.99</p>
                    </a>
                </div>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHIptbynRyXI5BfM0TYpyzLJ24xecOWJMHqA&s">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Product Name</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">£9.99</p>
                    </a>
                </div>

                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="data:image/jpeg;base64,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">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">Product Name</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">£9.99</p>
                    </a>
                </div>

                </div>

        </section>
        <section class="bg-blue-200 flex justify-center items-center">
            <nav class="">
                <ul class="list-style-none flex gap-2 py-2">
                <li>
                    <a
                    class="relative block rounded bg-white hover:bg-blue-400 px-3 py-1.5 text-sm text-surface"
                    href="#"
                    >Previous</a
                    >
                </li>
                <li>
                    <a
                    class="relative block rounded bg-white hover:bg-blue-400 px-3 py-1.5 text-sm text-surface "
                    href="#"
                    >1</a
                    >
                </li>
                <li aria-current="page">
                    <a
                    class="relative block rounded bg-white hover:bg-blue-400 px-3 py-1.5 text-sm text-surface "
                    href="#"
                    >2</a
                    >
                </li>
                <li>
                    <a
                    class="relative block rounded bg-white px-3 py-1.5 text-sm text-surface "
                    href="#"
                    >3</a
                    >
                </li>
                <li>
                    <a
                    class="relative block rounded bg-white hover:bg-blue-400 px-3 py-1.5 text-sm text-surface " 
                    href="#"
                    >Next</a
                    >
                </li>
                </ul>
            </nav>
        </section>

 

    @include('layouts.footer')

    </body>

</html>