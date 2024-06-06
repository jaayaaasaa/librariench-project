@php
    $user = \App\Models\User::where('id', auth()->user()->id)->get();
@endphp
@foreach ($user as $user)
    
<div class="top-0 py-1 lg:py-2 w-full bg-transparent lg:relative bg-[#E1DCC5] dark:bg-[#E1DCC5]">
  <nav class="z-10 sticky top-0 left-0 right-0 max-w-4xl xl:max-w-5xl mx-auto px-5 py-2.5 lg:border-none lg:py-4">
      <div class="flex items-center justify-between">
          <button>
              <a href="/app">
              <div class="flex items-center space-x-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Map_symbol_museum.svg/768px-Map_symbol_museum.svg.png" class="h-8" alt="Flowbite Logo" />
                <h2 class="text-black dark:text-[#333333] font-bold text-2xl">Librariench</h2>
              </div>
            </a>
          </button>
          <div class="hidden lg:block">
              <ul class="flex space-x-10 text-base font-bold text-black/60 dark:text-[#333333]">
                  <li
                      class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                      <a href="/app">Home</a>
                  </li>
                  <li
                      class="hover:underline hover:underline-offset-4 hover:w-fit transition-all duration-100 ease-linear">
                      <a href="/app">Book</a>
                  </li>
              </ul>
          </div>
          <form class="flex flex-col md:flex-row gap-x-3">
            <div class="flex">
                <input class="w-full md:w-60 py-2 px-4 border border-gray-300 rounded-l-md shadow-sm" type="search" placeholder="Search">
                <button class="flex items-center px-4 text-gray-700 bg-gray-100 border border-gray-300 rounded-r-md hover:bg-gray-200 ">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.795 13.408l5.204 5.204a1 1 0 01-1.414 1.414l-5.204-5.204a7.5 7.5 0 111.414-1.414zM8.5 14A5.5 5.5 0 103 8.5 5.506 5.506 0 008.5 14z" />
                </svg>
                </button>              
            </div>
          </form>
          <div data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="hidden lg:flex lg:items-center gap-x-2">
            <img class="w-10 h-10 rounded-full" src="{{ $user->avatar }}" alt="">
            <div class="flex flex-col">
                <p class=" font-bold">{{ $user->name }}</p>
                <p class="text-sm text-slate-600">{{ $user->email }}</p>
            </div>
            @if (auth()->user()->id == '1')
                <a href="/admin">
                <div>
                    <p class="text-sm bg-blue-500 px-2 py-2 rounded-full hover:bg-sky-600">Admin</p>
                </div>
                </a>
            @endif
          </div>
          <div class="flex items-center justify-center lg:hidden">
              <button class="focus:outline-none text-slate-200 dark:text-[#333333]"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" class="text-2xl text-slate-800 dark:text-white focus:outline-none active:scale-110 active:text-red-500" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg></button>
          </div>
          
          <!-- drawer component -->
            <div id="drawer-right-example" class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 dark:bg-[#E1DCC5]" tabindex="-1" aria-labelledby="drawer-right-label"> 
                tes
            </div>
      </div>
  </nav>
</div>
@endforeach

<div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to log out?</h3>
                <a href="/homepage">
                <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                    Yes, I'm sure
                </button>
                </a>
                <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
            </div>
        </div>
    </div>
</div>