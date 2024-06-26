<header class="bg-black">
    <div class="object-top opacity-80 bg-gradient-to-r from-sky-500 to-indigo-200 bg-cover rounded">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="/images/logo.png" class="h-16" alt="Flowbite Logo" />
                <span class="self-center text-3xl text-white font-bold whitespace-nowrap">MoroccoExplorer</span>
              </a>
              <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <form action="{{ route('logout') }}" method="post">
                  @csrf

                  <button type="submit" class="text-white bg-amber-700 font-medium rounded-lg text-sm px-4 py-2 text-center">Log Out</button>
                </form>
                  <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center bg-black p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden" aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
              </div>
              <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                  <ul class="flex flex-col font-medium p-4 bg-transparent md:p-0 mt-4  rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 ">
                  <li>
                    <a href="{{ route('home') }}" class="underline block py-2 px-3 md:p-0 text-white text-2xl rounded   md:hover:text-amber-500">Home</a>
                  </li>
                  <li>
                    <a href="{{ route('store') }}" class="underline block py-2 px-3 md:p-0 text-white text-2xl rounded md:hover:bg-transparent md:hover:text-amber-700">Store</a>
                  </li>
                  <li>
                    <a href="{{ route('travel') }}" class="underline block py-2 px-3 md:p-0 text-white text-2xl rounded md:hover:bg-transparent md:hover:text-amber-700">Travel</a>
                  </li>
                  <li>
                    <a href="{{ route('blog') }}" class="underline block py-2 px-3 md:p-0 text-white text-2xl rounded md:hover:bg-transparent md:hover:text-amber-700">Blog</a>
                  </li>
                  <li>
                    <a href="{{ route('contact') }}" class="underline block py-2 px-3 md:p-0 text-white text-2xl rounded md:hover:bg-transparent md:hover:text-amber-700">Contact</a>
                  </li>
                  <li>
                    <a href="{{ route('project') }}" class="underline block py-2 px-3 md:p-0 text-white text-2xl rounded md:hover:bg-transparent md:hover:text-amber-700">Projects</a>
                  </li>
                </ul>
              </div>
        </div>
    </header>