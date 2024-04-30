<x-app-layout>
@section('content')
    <x-guest-layout>
        <form method="POST" action="/admin/book" enctype="multipart/form-data">
            @csrf
            <div>
                <h1 class=" text-[#f7a317] text-5xl font-extrabold my-8 text-center">Add Book</h1>
            </div>
            <div class="mt-4">
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" autofocus autocomplete="title" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="image" :value="__('Image')" />
                <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" autofocus autocomplete="image" />
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="content" :value="__('Content')" />
                <x-text-input id="content" class="block mt-1 w-full h-40" type="text" name="content" :value="old('content')" autofocus autocomplete="body" />
                <x-input-error :messages="$errors->get('content')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="published_at" :value="__('Published At')" />
                <x-text-input id="published_at" class="block mt-1 w-full" type="text" name="published_at" :value="old('published_at')" autofocus autocomplete="published_at" />
                <x-input-error :messages="$errors->get('published_at')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="isbn" :value="__('ISBN')" />
                <x-text-input id="isbn" class="block mt-1 w-full" type="text" name="isbn" :value="old('isbn')" autofocus autocomplete="isbn" />
                <x-input-error :messages="$errors->get('isbn')" class="mt-2" />
            </div>

            <div class="mt-4">
                <a href="/admin/author">Add Author</a>
           </div>
            <div class="mt-4">
               <label for="authorId" class="form-label">Author</label>
               <select name="authorId" class="form-select">
                   @foreach ($authors as $author)
                   <option value="{{ $author->authorid }}"
                       selected="{{ isset($book) and $book->author->id == $author->id ? 'true' : 'false' }}">
                       {{ $author->author_name }}
                   </option>
                   @endforeach
               </select>
           </div>

           <div class="mt-4">
                <a href="/admin/type">Add Type</a>
           </div>
           <div class="mt-4">
            @foreach($types as $type)
                <input type="checkbox" id="type" name="type[]" value="{{$type->typeId}}">
                <label for="type">{{$type->type}}</label>
            @endforeach
            </div>

            <x-primary-button class="ms-3 mt-8">
                    {{ __('Send') }}
            </x-primary-button>
        </form>
    </x-guest-layout>
@endsection
</x-app-layout>