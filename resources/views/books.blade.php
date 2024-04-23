<x-app-layout>
@section('content')
    <section class=" min-h-96 min-w-full relative">
        <img src="{{ URL('images/library.jpg')}}" alt="" class=" absolute w-full h-[28rem] opacity-35 mt-8">
        <h1 class="  absolute text-7xl text-[#f7a317] font-extrabold text-center w-full top-1/4">Search Your Book Now</h1>
        <input type="search" name="" id="" class=" absolute rounded-full h-12 w-[52rem] top-[60%] left-[18%] border-4 border-[#f7a317]">
    </section>
    <section class="mt-36 min-h-screen min-w-full relative">
        <div class="m-5 flex">
            <h1 class="text-[#f7a317] font-bold text-xl">Search by Author Name</h1>
            <input type="search" name="" id="" class=" rounded-md h-8 w-60 ml-12 ">
        </div>
        <div class="m-5 flex">
            <h1 class="text-[#f7a317] font-bold text-xl">Search by Book type</h1>
            <input type="search" name="" id="" class=" rounded-md h-8 w-60 ml-12 ">
        </div>
        <div class="grid grid-cols-6 gap-5 h-screen rounded-md m-5 mt-12">
            @foreach($books as $book)
            <div class="h-78 bg-[#2a2a2b] rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('images/' . $book->image_path)}}" alt="..." class="w-full h-80 bg-sky-800 object-cover">
                <div class="p-4">
                    <h4 class="text-[#f7a317] font-extrabold">{{ $book->title}}</h4>
                    <p class="text-[#f7a317] font-light">Sci-fi</p>
                    <p class="text-[#f7f7f7] mt-6">{{ $book->content}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
</x-app-layout>