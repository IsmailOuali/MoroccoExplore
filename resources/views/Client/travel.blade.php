<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Tour & Travels Agency Tailwind CSS Template" name="description">2
        <meta content="Tour, Travels, agency, business, corporate, tour packages, journey, trip, tailwind css, Admin, Landing" name="keywords">
        <meta name="author" content="Shreethemes">
        <meta name="website" content="https://shreethemes.in">
        <meta name="email" content="support@shreethemes.in">
        <meta name="version" content="1.0.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        
        <!-- Css -->
        <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
        <link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
        <link href="assets/libs/js-datepicker/datepicker.min.css" rel="stylesheet">
        <!-- Main Css -->
        <link href="assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/tailwind.min.css" rel="stylesheet" type="text/css">
        <title>Travels</title>
        <script src="https://cdn.tailwindcss.com"></script>
        
    </head>
    
    <body class="bg-black opacity-85">

        @include('layouts.nav')
        <!-- Hero Start -->
        <section class="relative md:py-24 py-16 bg-blue-200 ">
            <div class="container relative">
                <div class="flex justify-center items-center py-8 w-screen">
                    <form class="" action="">
                        <input class="h-10 pr-2 bg-gray-200 rounded text-2xl font-semibold border-none" type="text" placeholder="Search">
                        <button class="bg-red-200 p-2 w-24 m-auto text-black font-semibold text-xl rounded-full hover:bg-gray-800 hover:text-white">Search</button>
                    </form>
                    <select class="mx-4 inline-block bg-gray-200 rounded-2xl mx-4 pr-8 text-2xl font-semibold" name="Category" id="">
                        <option value="">Category</option>
                    </select>
                    <select class="mx-4 inline-block bg-gray-200 rounded-2xl  mx-4 pr-8 text-2xl font-semibold" name="Destination" id="">
                        <option value="">Destination</option>
                    </select>
                </div>
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">                    
                    <div class="group rounded-md shadow dark:shadow-gray-700">
                        <div class="md:flex md:items-center">
                            <div class="relative overflow-hidden md:shrink-0 md:rounded-md rounded-t-md shadow dark:shadow-gray-700 md:m-3 mx-3 mt-3">
                                <img src="assets/images/listing/1.jpg" class="h-full w-full object-cover md:w-48 md:h-56 scale-125 group-hover:scale-100 duration-500" alt="">
                                <div class="absolute top-0 start-0 p-4">
                                    <span class="bg-red-500 text-white text-[12px] px-2.5 py-1 font-medium rounded-md h-5">10% Off</span>
                                </div>
    
                                <div class="absolute top-0 end-0 p-4">
                                    <a href="javascript:void(0)" class="size-8 inline-flex justify-center items-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-500 dark:focus:text-red-500 hover:text-red-500 dark:hover:text-red-500"><i class="mdi mdi-heart text-[20px] align-middle"></i></a>
                                </div>
                            </div>
                            
                            <div class="p-4 w-full">
                                <p class="flex items-center text-slate-400 font-medium mb-2"><i data-feather="map-pin" class="text-red-500 size-4 me-1"></i> Dubai</p>
                                <a href="tour-detail-one.html" class="text-lg font-medium hover:text-red-500 duration-500 ease-in-out">Cuba Sailing Adventure</a>

                                <div class="flex items-center mt-2">
                                    <span class="text-slate-400">Rating:</span>
                                    <ul class="text-lg font-medium text-amber-400 list-none ms-2">
                                        <li class="inline text-black dark:text-white text-sm">5.0(30)</li>
                                    </ul>
                                </div>
                                
                                <div class="mt-4 pt-4 flex justify-between items-center border-t border-slate-100 dark:border-gray-800">
                                    <h5 class="text-lg font-medium text-red-500">$ 58 / Day</h5>

                                    <a href="" class="text-black font-bold underline hover:text-red-500">Explore Now <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end content-->
                    <div class="group rounded-md shadow dark:shadow-gray-700">
                        <div class="md:flex md:items-center">
                            <div class="relative overflow-hidden md:shrink-0 md:rounded-md rounded-t-md shadow dark:shadow-gray-700 md:m-3 mx-3 mt-3">
                                <img src="assets/images/listing/1.jpg" class="h-full w-full object-cover md:w-48 md:h-56 scale-125 group-hover:scale-100 duration-500" alt="">
                                <div class="absolute top-0 start-0 p-4">
                                    <span class="bg-red-500 text-white text-[12px] px-2.5 py-1 font-medium rounded-md h-5">10% Off</span>
                                </div>
    
                                <div class="absolute top-0 end-0 p-4">
                                    <a href="javascript:void(0)" class="size-8 inline-flex justify-center items-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-500 dark:focus:text-red-500 hover:text-red-500 dark:hover:text-red-500"><i class="mdi mdi-heart text-[20px] align-middle"></i></a>
                                </div>
                            </div>
                            
                            <div class="p-4 w-full">
                                <p class="flex items-center text-slate-400 font-medium mb-2"><i data-feather="map-pin" class="text-red-500 size-4 me-1"></i> Dubai</p>
                                <a href="tour-detail-one.html" class="text-lg font-medium hover:text-red-500 duration-500 ease-in-out">Cuba Sailing Adventure</a>

                                <div class="flex items-center mt-2">
                                    <span class="text-slate-400">Rating:</span>
                                    <ul class="text-lg font-medium text-amber-400 list-none ms-2">
                                        <li class="inline text-black dark:text-white text-sm">5.0(30)</li>
                                    </ul>
                                </div>
                                
                                <div class="mt-4 pt-4 flex justify-between items-center border-t border-slate-100 dark:border-gray-800">
                                    <h5 class="text-lg font-medium text-red-500">$ 58 / Day</h5>

                                    <a href="" class="text-black font-bold underline hover:text-red-500">Explore Now <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end content-->
                    <div class="group rounded-md shadow dark:shadow-gray-700">
                        <div class="md:flex md:items-center">
                            <div class="relative overflow-hidden md:shrink-0 md:rounded-md rounded-t-md shadow dark:shadow-gray-700 md:m-3 mx-3 mt-3">
                                <img src="assets/images/listing/1.jpg" class="h-full w-full object-cover md:w-48 md:h-56 scale-125 group-hover:scale-100 duration-500" alt="">
                                <div class="absolute top-0 start-0 p-4">
                                    <span class="bg-red-500 text-white text-[12px] px-2.5 py-1 font-medium rounded-md h-5">10% Off</span>
                                </div>
    
                                <div class="absolute top-0 end-0 p-4">
                                    <a href="javascript:void(0)" class="size-8 inline-flex justify-center items-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-500 dark:focus:text-red-500 hover:text-red-500 dark:hover:text-red-500"><i class="mdi mdi-heart text-[20px] align-middle"></i></a>
                                </div>
                            </div>
                            
                            <div class="p-4 w-full">
                                <p class="flex items-center text-slate-400 font-medium mb-2"><i data-feather="map-pin" class="text-red-500 size-4 me-1"></i> Dubai</p>
                                <a href="tour-detail-one.html" class="text-lg font-medium hover:text-red-500 duration-500 ease-in-out">Cuba Sailing Adventure</a>

                                <div class="flex items-center mt-2">
                                    <span class="text-slate-400">Rating:</span>
                                    <ul class="text-lg font-medium text-amber-400 list-none ms-2">
                                        <li class="inline text-black dark:text-white text-sm">5.0(30)</li>
                                    </ul>
                                </div>
                                
                                <div class="mt-4 pt-4 flex justify-between items-center border-t border-slate-100 dark:border-gray-800">
                                    <h5 class="text-lg font-medium text-red-500">$ 58 / Day</h5>

                                    <a href="" class="text-black font-bold underline hover:text-red-500">Explore Now <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end content-->
                    
                    
                </div><!--end grid-->

                <div class="grid md:grid-cols-12 grid-cols-1 mt-6">
                    <div class="md:col-span-12 text-center">
                        <nav aria-label="Page navigation example">
                            <ul class="inline-flex items-center -space-x-px">
                                <li>
                                    <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-s-3xl hover:text-white border border-gray-100 dark:border-gray-800 hover:border-red-500 dark:hover:border-red-500 hover:bg-red-500 dark:hover:bg-red-500">
                                        <i data-feather="chevron-left" class="size-5 rtl:rotate-180 rtl:-mt-1"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-red-500 dark:hover:border-red-500 hover:bg-red-500 dark:hover:bg-red-500">1</a>
                                </li>
                                <li>
                                    <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-red-500 dark:hover:border-red-500 hover:bg-red-500 dark:hover:bg-red-500">2</a>
                                </li>
                                <li>
                                    <a href="#" aria-current="page" class="z-10 size-[40px] inline-flex justify-center items-center text-white bg-red-500 border border-red-500">3</a>
                                </li>
                                <li>
                                    <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-red-500 dark:hover:border-red-500 hover:bg-red-500 dark:hover:bg-red-500">4</a>
                                </li>
                                <li>
                                    <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-red-500 dark:hover:border-red-500 hover:bg-red-500 dark:hover:bg-red-500">5</a>
                                </li>
                                <li>
                                    <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-e-3xl hover:text-white border border-gray-100 dark:border-gray-800 hover:border-red-500 dark:hover:border-red-500 hover:bg-red-500 dark:hover:bg-red-500">
                                        <i data-feather="chevron-right" class="size-5 rtl:rotate-180 rtl:-mt-1"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container-->
        </section>
        <!-- Hero End -->

        <!-- Start -->
        <section class="relative md:py-24 py-16 overflow-hidden bg-sky-200">
            <div class="container relative">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Top Destinations</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">Planning for a trip? We will organize your trip with the best places and within best budget!</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 relative mt-6 gap-6">
                    <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                        <img src="assets/images/listing/1.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="">
                        <div class="absolute inset-0 bg-gradient-to-b to-slate-900 from-transparent opacity-0 group-hover:opacity-100 duration-500"></div>
                        <div class="absolute p-4 bottom-0 start-0">
                            <a href="" class="text-lg font-medium text-white hover:text-red-500 duration-500 ease-in-out">Rome, Italy</a>
                            <p class="text-white/70 group-hover:text-white text-sm duration-500">3 Hotels</p>
                        </div>
                    </div><!--end content-->
                    
                    <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                        <img src="assets/images/listing/2.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="">
                        <div class="absolute inset-0 bg-gradient-to-b to-slate-900 from-transparent opacity-0 group-hover:opacity-100 duration-500"></div>
                        <div class="absolute p-4 bottom-0 start-0">
                            <a href="" class="text-lg font-medium text-white hover:text-red-500 duration-500 ease-in-out">Singapore</a>
                            <p class="text-white/70 group-hover:text-white text-sm duration-500">3 Hotels</p>
                        </div>
                    </div><!--end content-->
                    
                    <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                        <img src="assets/images/listing/3.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="">
                        <div class="absolute inset-0 bg-gradient-to-b to-slate-900 from-transparent opacity-0 group-hover:opacity-100 duration-500"></div>
                        <div class="absolute p-4 bottom-0 start-0">
                            <a href="" class="text-lg font-medium text-white hover:text-red-500 duration-500 ease-in-out">Paris, France</a>
                            <p class="text-white/70 group-hover:text-white text-sm duration-500">3 Hotels</p>
                        </div>
                    </div><!--end content-->
                    
                    <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                        <img src="assets/images/listing/4.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="">
                        <div class="absolute inset-0 bg-gradient-to-b to-slate-900 from-transparent opacity-0 group-hover:opacity-100 duration-500"></div>
                        <div class="absolute p-4 bottom-0 start-0">
                            <a href="" class="text-lg font-medium text-white hover:text-red-500 duration-500 ease-in-out">Goa, India</a>
                            <p class="text-white/70 group-hover:text-white text-sm duration-500">3 Hotels</p>
                        </div>
                    </div><!--end content-->
                    
                    <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                        <img src="assets/images/listing/5.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="">
                        <div class="absolute inset-0 bg-gradient-to-b to-slate-900 from-transparent opacity-0 group-hover:opacity-100 duration-500"></div>
                        <div class="absolute p-4 bottom-0 start-0">
                            <a href="" class="text-lg font-medium text-white hover:text-red-500 duration-500 ease-in-out">Whistler, Canada</a>
                            <p class="text-white/70 group-hover:text-white text-sm duration-500">3 Hotels</p>
                        </div>
                    </div><!--end content-->
                    
                    <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                        <img src="assets/images/listing/6.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="">
                        <div class="absolute inset-0 bg-gradient-to-b to-slate-900 from-transparent opacity-0 group-hover:opacity-100 duration-500"></div>
                        <div class="absolute p-4 bottom-0 start-0">
                            <a href="" class="text-lg font-medium text-white hover:text-red-500 duration-500 ease-in-out">Kuala Lumpur, Malaysia</a>
                            <p class="text-white/70 group-hover:text-white text-sm duration-500">3 Hotels</p>
                        </div>
                    </div><!--end content-->
                    
                    <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                        <img src="assets/images/listing/7.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="">
                        <div class="absolute inset-0 bg-gradient-to-b to-slate-900 from-transparent opacity-0 group-hover:opacity-100 duration-500"></div>
                        <div class="absolute p-4 bottom-0 start-0">
                            <a href="" class="text-lg font-medium text-white hover:text-red-500 duration-500 ease-in-out">Sydney, Australia</a>
                            <p class="text-white/70 group-hover:text-white text-sm duration-500">3 Hotels</p>
                        </div>
                    </div><!--end content-->
                    
                    <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                        <img src="assets/images/listing/8.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="">
                        <div class="absolute inset-0 bg-gradient-to-b to-slate-900 from-transparent opacity-0 group-hover:opacity-100 duration-500"></div>
                        <div class="absolute p-4 bottom-0 start-0">
                            <a href="" class="text-lg font-medium text-white hover:text-red-500 duration-500 ease-in-out">Virginia Beach</a>
                            <p class="text-white/70 group-hover:text-white text-sm duration-500">3 Hotels</p>
                        </div>
                    </div><!--end content-->
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative md:mt-24 mt-16">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-6 relative">
                    <div class="md:col-span-5">
                        <div class="relative">
                            <img src="assets/images/about.jpg" class="mx-auto rounded-3xl shadow dark:shadow-gray-700 w-[90%]" alt="">
                            
                    </div>

                    <div class="md:col-span-7">
                        <div class="lg:ms-8">
                            <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">World Best Travel <br> Agency: Travosy</h3>

                            <p class="text-slate-400 max-w-xl mb-6">Get instant helpful resources about anything on the go, easily implement secure money transfer solutions, boost your daily efficiency, connect to other app users and create your own Travosy network, and much more with just a few taps. commodo consequat. Duis aute irure.</p>

                            <a href="" class="py-2 px-5 inline-block tracking-wide align-middle duration-500 text-base text-center bg-red-500 text-white rounded-md">Read More <i class="mdi mdi-chevron-right align-middle ms-0.5"></i></a>
                        </div>
                    </div>

                    <div class="absolute bottom-0 start-1/3 -z-1">
                        <img src="assets/images/map-plane-big.png" class="lg:w-[600px] w-96" alt="">
                    </div>
                </div>
            </div><!--end container-->



        </section>

        



        
        
        @include('layouts.footer')
        <!-- JAVASCRIPTS -->
        <script src="assets/libs/tobii/js/tobii.min.js"></script>
        <script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
        <script src="assets/libs/js-datepicker/datepicker.min.js"></script>
        <script src="assets/js/easy_background.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        
        <script>
            easy_background("#home",
                {
                    slide: ["assets/images/bg/4.jpg", "assets/images/bg/5.jpg", "assets/images/bg/6.jpg"],
                    delay: [4000, 4000, 4000],
                    
                }
            );
        </script>
        <!-- JAVASCRIPTS -->
    </body>
</html>