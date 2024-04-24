<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>Morocco Explorer</title>
    </head>
    <body class="bg-black">
        <header class="">
            @include('layouts.nav')
            <div class="w-full  flex flex-col items-center justify-center h-screen bg-[url('/images/bg-home1.png')] bg-cover">   
                <p id="typewriter" class="pt-32 text-amber-600 font-bold flex  items-center text-center justify-center text-8xl"></p>
                <button type="button" class="w-28 mt-8 text-gray-900 font-bold bg-gradient-to-r from-amber-200 via-amber-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">More</button>
            </div>
        </header>

        <section class="bg-amber-600 opacity-75">
            <div class="flex items-center justify-center pt-8">
                <p class="text-3xl text-white font-bold">A discuter</p>
            </div>
            <div class=" mt-8 flex flex-col justify-between items-center">
                <div class="mt-8">
                    <a href="#" class="flex flex-col items-center  rounded-lg shadow md:flex-row md:max-w-xl bg-amber-400">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="/images/logo.png" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                            <p class="mb-3 font-normal text-black ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        </div>
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#" class="flex flex-col items-center  rounded-lg shadow md:flex-row md:max-w-xl bg-amber-400">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="/images/logo.png" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                            <p class="mb-3 font-normal text-black ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        </div>
                    </a>
                </div>
                <div class="mt-8 mb-16">
                    <a href="#" class="flex flex-col items-center  rounded-lg shadow md:flex-row md:max-w-xl bg-amber-400">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="/images/logo.png" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                            <p class="mb-3 font-normal text-black ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="opacity-75 bg-amber-500 flex">

        <div class="w-1/2 p-16">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/2 p-16">
            <h3 class="text-white underline text-center font-bold text-3xl p-8">Best Recomended Destinations</h3>
            <p class="text-center p-8 font-semibold text-xl">Best Recomended Destination Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi deleniti, numquam reiciendis cum, similique perferendis laboriosam nihil doloremque suscipit molestias ea consequuntur quam facilis eos, officiis nulla. Quae, laudantium facilis.</p>
        </div>
            
        </section>
        @include('layouts.footer')

    <script>
        const words = ["Discover", "Moroccan Vibes."];
    let i = 0;
    let j = 0;
    let currentWord = "";
    let isDeleting = false;

    function type() {
    currentWord = words[i];
    if (isDeleting) {
        document.getElementById("typewriter").textContent = currentWord.substring(0, j-1);
        j--;
        if (j == 0) {
        isDeleting = false;
        i++;
        if (i == words.length) {
            i = 0;
        }
        }
    } else {
        document.getElementById("typewriter").textContent = currentWord.substring(0, j+1);
        j++;
        if (j == currentWord.length) {
        isDeleting = true;
        }
    }
    setTimeout(type, 200);
    }

    type();
    </script>
    </body>
</html>