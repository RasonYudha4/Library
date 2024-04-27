<x-app-layout>
@section('content')
<div class=" min-h-screen w-full bg-[#181818]">
    <h1 class=" text-[#f7a317] font-extrabold text-5xl m-8">Book Existed</h1>
    <a href="/admin/book/create" class="text-[#f7a317] hover:text-[#ea6820] text-2xl ml-8 " >Add Book</a>
    <table class=" w-full mt-8">
        <thead>
            <tr>
                <th class="text-[#f7a317] mr-6">Title</th>
                <th class="text-[#f7a317] mr-6">Content</th>
                <th class="text-[#f7a317] mr-6">Image</th>
                <th class="text-[#f7a317]">Edit / Delete</th>
            </tr>
        </thead>
        <tbody class=" ml-7">
            @foreach($books as $book)
            <tr class="m-2">
                <td class="text-[#f7a317] px-6">{{ $book->title}}</td>
                <td class="text-[#f7a317] px-6 text-ellipsis overflow-hidden max-w-80">{{ $book->content}}</td>
                <td><img src="{{ asset('images/' . $book->image_path)}}" alt="" class=" max-w-10 max-h-20 mx-auto"></td>
                <td><div class=" flex justify-evenly">
                    <a href="book/{{$book->id}}/edit" class=" px-3 text-[#f7a317] hover:text-[#ea6820]">Edit</a>
                    <form action="/admin/book/{{$book->id}}" method="POST">
                        @csrf 
                        @method('delete')

                        <button type="submit" onclick="return confirm('Are you sure you want to delete this book?')" class=" px-3 text-[#f7a317] hover:text-[#ea6820]">
                            Delete
                        </button>
                    </form>
                </div></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
</x-app-layout>