<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Login</title>
</head>
<body>
    <div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat" style="background-image:url('/images/bg-login.jpg')">
        <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
          <div class="text-white">
            <div class="mb-8 flex flex-col items-center">
              <img src="/images/logo-big.png" width="150" alt="" srcset="" />
              <span class="text-gray-300  border border-yellow-200">Enter Login Details</span>
            </div>
            <form action="/login" method="post">
              @csrf
              <div class="mb-4 text-lg">
                <input class="rounded-3xl border-none bg-yellow-200 bg-opacity-50 px-6 py-2 text-center text-inherit shadow-lg outline-none backdrop-blur-md" type="text" name="email" placeholder="user@email.com" />
              </div>
      
              <div class="mb-4 text-lg">
                <input class="rounded-3xl border-none bg-yellow-200 bg-opacity-50 px-6 py-2 text-center text-inherit  shadow-lg outline-none backdrop-blur-md" type="Password" name="password" placeholder="*********" />
              </div>
              <div class="inline-flex items-center">
                <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="check">
                  <input type="checkbox"
                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-gray-900 checked:before:bg-gray-900 hover:before:opacity-10"
                    id="check" />
                  <span
                    class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor"
                      stroke="currentColor" stroke-width="1">
                      <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </span>
                </label>
                <label class="mt-px font-light text-white cursor-pointer select-none" htmlFor="check">
                  Remember Me
                </label>
              </div> 
              <div class="mt-8 flex justify-center text-lg text-black">
                <button type="submit" class="rounded-3xl bg-blue-400 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-yellow-600">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
</body>
</html>