<div class="bg-white dark:bg-white shadow-lg rounded-sm border-gray-700 sm:max-w-sm md:max-w-xl lg:max-w-5xl mx-auto">
   
    {{-- Welcome --}}
    <div class="px-8 pt-5">
        <h4 class=" text-sky-700">Welcome To Our Librariench</h4>
    </div>
    <div id="default-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-44">
            
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('source.slidecarousel.welcome')
            </div>
            
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('source.slidecarousel.welcome2')
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('source.slidecarousel.slide3')
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('source.slidecarousel.slide4')
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-sky-500 group-hover:bg-white/50 dark:group-hover:bg-sky-700 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-sky-500 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-sky-500 group-hover:bg-white/50 dark:group-hover:bg-sky-600 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-sky-500 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    
    {{-- Populer --}}
    <div id="popular" class="px-8 pt-10">
        <h4 class="underline text-sky-700 mb-2">Popular</h4>
    </div>
    <div id="default-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-72 bg-[#f3edd7]">
            
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('book.populer.baris1-1')
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('book.populer.baris1-2')
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('book.populer.baris1-3')
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('book.populer.baris1-4')
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('book.populer.baris1-5')
            </div>
            <!-- Item 6 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                {{-- @include('source.slidecarousel.baris1') --}}
            </div>
        </div>
        
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-sky-500 group-hover:bg-white/50 dark:group-hover:bg-sky-700 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-sky-500 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-sky-500 group-hover:bg-white/50 dark:group-hover:bg-sky-600 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-sky-500 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    {{-- Pendidikan --}}
    <div id="pendidikan" class="px-8 pt-8 mb-2">
        <h4 class="underline text-sky-700">Knowldege</h4>
    </div>
    <div id="default-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-72 bg-[#f3edd7]">
            
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('book.pendidikan.baris1-1')
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('book.pendidikan.baris1-2')
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('book.pendidikan.baris1-3')
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('book.pendidikan.baris1-4')
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                {{-- @include('source.slidecarousel.baris1') --}}
            </div>
        </div>
        
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-sky-500 group-hover:bg-white/50 dark:group-hover:bg-sky-700 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-sky-500 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-sky-500 group-hover:bg-white/50 dark:group-hover:bg-sky-600 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-sky-500 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    {{-- Drama --}}
    <div id="drama" class="px-8 pt-8 mb-2">
        <h4 class="underline text-sky-700">Drama</h4>
    </div>
    <div id="default-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-72 bg-[#f3edd7]">
            
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('book.drama.baris1-1')
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('book.drama.baris1-2')
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('book.drama.baris1-3')
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('book.drama.baris1-4')
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('book.drama.baris1-5')
            </div>
        </div>
        
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-sky-500 group-hover:bg-white/50 dark:group-hover:bg-sky-700 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-sky-500 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-sky-500 group-hover:bg-white/50 dark:group-hover:bg-sky-600 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-sky-500 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    {{-- Fantasi --}}
    <div id="fantasy" class="px-8 pt-8 mb-2">
        <h4 class="underline text-sky-700">Fantasy</h4>
    </div>
    <div id="default-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-72 bg-[#f3edd7]">
            
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('book.fantasi.baris1-1')
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('book.fantasi.baris1-2')
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('book.fantasi.baris1-3')
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('book.fantasi.baris1-4')
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('book.fantasi.baris1-5')
            </div>
        </div>
        
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-sky-500 group-hover:bg-white/50 dark:group-hover:bg-sky-700 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-sky-500 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-sky-500 group-hover:bg-white/50 dark:group-hover:bg-sky-600 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-sky-500 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>


    {{-- Kategori --}}
    <div id="category" class="px-8 pt-8 mb-2">
        <h4 class="underline text-sky-700">Category</h4>
    </div>
    <div id="default-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-20">
            
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                @include('source.slidecarousel.kategori')
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                {{-- @include('source.baris1') --}}
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                {{-- @include('source.slide3') --}}
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                {{-- @include('source.slide4') --}}
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                {{-- @include('source.slide1') --}}
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-sky-500 group-hover:bg-white/50 dark:group-hover:bg-sky-700 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-sky-500 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-sky-500 group-hover:bg-white/50 dark:group-hover:bg-sky-600 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-sky-500 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    {{-- About Us --}}
    <div class="sm:flex items-center max-w-screen-md mx-auto">
        <div class="sm:w-3/4 p-5">
            <div class="image object-center text-center">
                <img src="https://static.vecteezy.com/system/resources/previews/002/462/291/non_2x/man-reading-book-character-illustration-free-vector.jpg">
            </div>
        </div>
        <div class="sm:w-1/2 p-5">
            <div class="text">
                <span class="text-gray-500 border-b-2 border-indigo-600 uppercase">About us</span>
                <h2 class="my-4 font-bold text-3xl  sm:text-4xl ">About <span class="text-indigo-600">Our Website</span>
                </h2>
                <p class="text-gray-700">
                    This website was created with the aim of making it easier for people who want to read books 
                    from anywhere online without having to come to a library.
                </p>
            </div>
        </div>
    </div>

    {{-- Popular Tags --}}
    <div>
    <h2 class="flex flex-row flex-nowrap items-center">
        <span class="flex-grow block border-t border-black"></span>
        <span class="flex-none block mx-4 px-4 py-2.5 text-md rounded leading-none font-medium bg-black text-white">
        Popular Tags
    </span>
        <span class="flex-grow block border-t border-black"></span>
    </h2>

    <div class="flex justify-center flex-wrap gap-2 p-4 max-w-sm mx-auto my-4 text-sm">
        <a href="#popular"><button class="px-2 py-1 rounded bg-gray-200/50 text-gray-700 hover:bg-gray-300">Popular</button></a>
        <a href="#knowledge"><button class="px-2 py-1 rounded bg-gray-200/50 text-gray-700 hover:bg-gray-300">Knowledge</button></a>
        <a href="#drama"><button class="px-2 py-1 rounded bg-gray-200/50 text-gray-700 hover:bg-gray-300">Drama</button></a>
        <a href="#fantasy"><button class="px-2 py-1 rounded bg-gray-200/50 text-gray-700 hover:bg-gray-300">Fantasy</button></a>
        <a href=""><button class="px-2 py-1 rounded bg-gray-200/50 text-gray-700 hover:bg-gray-300">Technology</button></a>
        {{-- <button class="px-2 py-1 rounded bg-gray-200/50 text-gray-700 hover:bg-gray-300">Photography</button>
        <button class="px-2 py-1 rounded bg-gray-200/50 text-gray-700 hover:bg-gray-300">Sports</button>
        <button class="px-2 py-1 rounded bg-gray-200/50 text-gray-700 hover:bg-gray-300">Fashion</button>
        <button class="px-2 py-1 rounded bg-gray-200/50 text-gray-700 hover:bg-gray-300">History</button>
        <button class="px-2 py-1 rounded bg-gray-200/50 text-gray-700 hover:bg-gray-300">Nature</button>
        <button class="px-2 py-1 rounded bg-gray-200/50 text-gray-700 hover:bg-gray-300">Health</button>
        <button class="px-2 py-1 rounded bg-gray-200/50 text-gray-700 hover:bg-gray-300">Nurition</button>
        <button class="px-2 py-1 rounded bg-gray-200/50 text-gray-700 hover:bg-gray-300">Education</button>
        <button class="px-2 py-1 rounded bg-gray-200/50 text-gray-700 hover:bg-gray-300">Fitness</button>
        <button class="px-2 py-1 rounded bg-gray-200/50 text-gray-700 hover:bg-gray-300">Business</button> --}}
    </div>
</div>
    
</div>