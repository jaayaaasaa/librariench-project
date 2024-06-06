<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Map_symbol_museum.svg/768px-Map_symbol_museum.svg.png" rel="icon">
    @vite('resources/css/app.css', 'resources/js/app.js')
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    
</head>
<body>
<section class="dark:bg-[#E1DCC5]">
    @include('source.navbar-guest')
    <div class="bg-white dark:bg-white shadow-lg rounded-sm border-gray-700 sm:max-w-sm md:max-w-xl lg:max-w-5xl mx-auto">

        <div class="flex items-start justify-between p-5 border-b rounded-t">
            <h3 class="text-3xl font-semibold">
                Sign Up
            </h3>
        </div>
    
        <div class="p-6 space-y-6">
            <form wire:submit="login">
                <div class="grid grid-cols-5 gap-6 border-b-2 pb-6">
                    
                    <div class="col-span-6 sm:col-span-3">
                      <label for="email" class="text-sm font-medium text-gray-900 block mb-2">Email</label>
                      <input wire:model="email" type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="example@gmail.com" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="password" class="text-sm font-medium text-gray-900 block mb-2">Password</label>
                        <input wire:model="password" type="password" name="password" id="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="******" required="">
                    </div>
                </div>

                <div class="my-5 border-gray-200 rounded-b">
                  <button class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit">Submit</button>
                </div>
            </form>
        </div>
    
    </div>
    @include('source.footer')
    @include('source.js')
</section>
</body>
</html>