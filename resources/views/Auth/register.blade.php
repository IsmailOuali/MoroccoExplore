<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>Register</title>
    </head>
    <body>
        <div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat" style="background-image:url('/images/bg-register.jpg')">
            <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
            <div class="text-white">
                <div class="mb-8 flex flex-col items-center">
                <img src="/images/logo-big.png" width="150" alt="" srcset="" />
                <span class="text-gray-300 border border-yellow-200">Enter Register Details</span>
                </div>
                <form action="/register" method="post">
                    
                    @csrf

                    <div class="mb-4 text-lg">
                        <input class="rounded-2xl border-none bg-yellow-200 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md placeholder:text-gray-500" type="text" name="name" placeholder="Peter Parker" />
                    </div>
                    <div class="mb-4 text-lg">
                        <input class="rounded-2xl border-none bg-yellow-200 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md placeholder:text-gray-500" type="text" name="email" placeholder="user@email.com" />
                    </div>

            
                    <div class="mb-4 text-lg">
                        <input class="rounded-2xl border-none bg-yellow-200 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md placeholder:text-gray-500" type="Password" name="password" placeholder="*********" />
                    </div>
                    <div class="mb-4 text-lg">
                        <select name="role" class="rounded-2xl w-full bg-yellow-200 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md placeholder:text-gray-500">
                            <option value="Client" class="bg-yellow-200 text-black">Client</option>
                            <option value="Guide" class="bg-yellow-200 text-black">Guide</option>
                            <option value="Artisan" class="bg-yellow-200 text-black">Artisan</option>
                        </select>
                    </div>
            
                    <div class="mt-8 flex justify-center text-lg text-black">
                        <button type="submit" class="rounded-2xl bg-blue-400 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-yellow-600">Register</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </body>
</html>