<div>
    <h1>Book Existed</h1>
    <div class="w-5/6 py-10">
        @foreach($books as $book)
        <div>
            <h3>
                {{ $book->title}}
            </h3>

            <p>
            {{ $book->content}}
            </p>

            <img src="{{ asset('images/' . $book->image_path)}}" alt="">

            <a href="admin/book/{{$book->id}}/edit">Edit</a>
            <form action="/admin/book/{{$book->id}}" method="POST">
                @csrf 
                @method('delete')

                <button type="submit">
                    Delete
                </button>
            </form>
        </div>
        @endforeach
    </div>
</div>
