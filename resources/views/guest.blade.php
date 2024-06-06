@php
    $buku = \App\Models\Buku::all();
    $fantasi = \App\Models\Buku::where('kategori', 2)->get();
    $drama = \App\Models\Buku::where('kategori', 3)->get();
    $pendidikan = \App\Models\Buku::where('kategori', 4)->get();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Librariench</title>
    <link href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Map_symbol_museum.svg/768px-Map_symbol_museum.svg.png" rel="icon">
    @vite('resources/css/app.css', 'resources/js/app.js')
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    
</head>
<body class="dark:bg-[#E1DCC5]">

    @include('source.navbar-guest')
    @include('source.container')  
    @include('source.footer')
    @include('source.js')

    <x-impersonate::banner/>
</body>
</html>