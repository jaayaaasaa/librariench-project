@php
    $populer = \App\Models\Fantasi::whereIn('id', [16,17,18,19,20])->get();
@endphp
    
<div class="flex flex-row ml-7 ">

    @foreach ($populer as $populer)    
        <div class="flex lg:flex-col sm:flex-row border ml-10 my-5 rounded-lg max-w-36 text-center sm:text-left">
            <div class="bg-[#fcfbf7] border border-gray-700">
                <img class="p-3" src="{{ $populer->buku->cover }}" alt="">
            </div>
            <button class="bg-sky-700 text-white mt-2 py-2 px-4 rounded-full font-bold">Read</button>
        </div>
    @endforeach

</div>


    

