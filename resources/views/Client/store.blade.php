<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
        
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>MoroccoExplorer Shop</title>


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

                <nav id="store" class="w-full top-0 py-1 ">
                    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

                        <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-3xl " href="#">
                        Store
                        </a>
                        <div class="">
                            <a class="bg-green-400 p-2 text-2xl font-semibold  rounded-xl text-center hover:bg-green-500" href="{{ route('panier') }}">Mon Panier</a>
                        </div>

                        <div class="flex items-center " id="store-nav-content">
                            <form action="{{ route('search') }}" method="GET">

                                <div class="pl-3 inline-block no-underline hover:text-black">
                                    <input name="query" class="mx-8 ml-3 h-10 pr-2 bg-gray-200 rounded text-2xl font-semibold border-none " type="text" placeholder="Search...">
                                    <button type="submit" class="bg-red-200 p-2 w-24 m-auto text-black font-semibold text-xl border border-black rounded-full hover:bg-red-400">Search</button>
                                </div>
                            </form>

                            <form action="{{ route('searchCat') }}" method="GET">
                                <select name="category" class="pl-3 inline-block bg-gray-200 rounded mx-4 pr-8 text-2xl font-semibold" href="#">
                                    @foreach ($categories as $category)
                                        
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                    <button type="submit" class="bg-red-200 p-2 w-24 m-auto text-black font-semibold text-xl border border-black rounded-full hover:bg-red-400">Rechercher</button>

                            </form>
                            

                        </div>
                </div>
                </nav>
                
                

                @foreach ($produits as $produit)
                
                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="{{ asset('assets/uploads/' . $produit->file)}}">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">{{ $produit->name }}</p>
                            <form action="{{ route('add.to.cart') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $produit->id }}">
                                <button type="submit" class="bg-green-200 p-2 w-24 m-auto text-black font-semibold text-xl border border-black rounded-full hover:bg-green-400">Acheter</button>
                            </form>
                        </div>
                        <p class="pt-1 text-gray-900">£{{ $produit->price }}</p>
                    </a>
                </div>
                @endforeach




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