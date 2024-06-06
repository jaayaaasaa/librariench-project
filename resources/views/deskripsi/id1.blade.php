@php
    $populer = \App\Models\Populer::where('id', 1)->get();
    $kategori =\App\Models\Kategori::where('id', 2)->get();
    $pengarang = \App\Models\Pengarang::where('id', 1)->get();
    $penerbit = \App\Models\Penerbit::where('id', 1)->get();
    $user = \App\Models\User::where('id', auth()->user()->id)->get();
@endphp

@foreach ($populer as $populer)    
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
<body class="dark:bg-[#E1DCC5]">
    @if (auth()->user()->id != null)
        @include('source.navbar-app')
    @else
        @include('source.navbar-guest')
    @endif
    <div class="bg-white dark:bg-white shadow-lg rounded-sm border-gray-700 sm:max-w-sm md:max-w-xl lg:max-w-5xl mx-auto">

        <div class="flex flex-row">

            {{-- Row 1 --}}
            <div class="flex flex-col m-4 border border-gray-300 w-60">
                <div class="p-4 mx-auto w-56">
                    <img src="{{ $populer->buku->cover }}" alt="">
                </div>

                <button class="bg-sky-700 text-white mx-auto mt-2 py-2 px-4 rounded-full font-bold w-56">
                    Baca
                </button>
                <button class="border border-sky-700 text-black mx-auto mt-2 py-2 px-4 rounded-full w-56">
                    Add to Whistlist
                </button>

                <div class="flex gap-0.5 my-5 mx-auto">
                    <svg class="h-8 w-8 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                        <path
                            d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                        </path>
                    </svg>
                    <svg class="h-8 w-8 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                        <path
                            d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                        </path>
                    </svg>
                    <svg class="h-8 w-8 shrink-0 fill-amber-400" viewBox="0 0 256 256">
                        <path
                            d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                        </path>
                    </svg>
                    <svg class="h-8 w-8 shrink-0 fill-gray-300" viewBox="0 0 256 256">
                        <path
                            d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                        </path>
                    </svg>
                    <svg class="h-8 w-8 shrink-0 fill-gray-300" viewBox="0 0 256 256">
                        <path
                            d="M239.2 97.4A16.4 16.4.0 00224.6 86l-59.4-4.1-22-55.5A16.4 16.4.0 00128 16h0a16.4 16.4.0 00-15.2 10.4L90.4 82.2 31.4 86A16.5 16.5.0 0016.8 97.4 16.8 16.8.0 0022 115.5l45.4 38.4L53.9 207a18.5 18.5.0 007 19.6 18 18 0 0020.1.6l46.9-29.7h.2l50.5 31.9a16.1 16.1.0 008.7 2.6 16.5 16.5.0 0015.8-20.8l-14.3-58.1L234 115.5A16.8 16.8.0 00239.2 97.4z">
                        </path>
                    </svg>
                </div>

                <div class="flex flex-row mx-auto gap-x-3">
                    <div class="flex flex-col hover:bg-slate-100 p-2">
                        <img class="w-7 mx-auto" src="/img/review.png" alt="">
                        <p class="text-xs">Review</p>
                    </div>
                    <div class="flex flex-col hover:bg-slate-100 p-2">
                        <img class="w-7 mx-auto" src="/img/notes.png" alt="">
                        <p class="text-xs">Notes</p>
                    </div>
                    <div class="flex flex-col hover:bg-slate-100 p-2">
                        <img class="w-7 mx-auto" src="/img/share.png" alt="">
                        <p class="text-xs">Share</p>
                    </div>
                </div>

            </div>


            {{-- Row 2 --}}
            <div class="flex flex-col">
                <div class="max-w-xl my-6 text-3xl font-bold ">
                    <h1>{{ $populer->buku->judul }}</h1>
                </div>
                <div class="flex flex-row gap-x-3">
                    @foreach ($kategori as $kategori)    
                    <div class="flex flex-col border border-slate-300 p-1 text-center rounded-lg w-48 h-14">
                        <p class="text-sm text-slate-500 ">Kategori</p>
                        <p>{{ $kategori->nama_kategori }}</p>
                    </div>
                    @endforeach
                    @foreach ($pengarang as $pengarang)    
                    <div class="flex flex-col border border-slate-300 p-1 text-center rounded-lg w-48 h-14">
                        <p class="text-sm text-slate-500 ">Pengarang</p>
                        <p>{{ $pengarang->nama_pengarang }}</p>
                    </div>
                    @endforeach
                    @foreach ($penerbit as $penerbit)    
                    <div class="flex flex-col border border-slate-300 p-1 text-center rounded-lg w-48 h-14">
                        <p class="text-sm text-slate-500">Penebit</p>
                        <p>{{ $penerbit->nama_penerbit }}</p>
                    </div>
                    @endforeach
                </div>
            </div>



        </div>

    </div>
    @include('source.footer')
    @include('source.js')
</body>
</html>
@endforeach
