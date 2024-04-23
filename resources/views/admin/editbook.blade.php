<x-app-layout>
@section('content')
    <x-guest-layout>
        <form method="POST" action="/admin/{{$book->id}}">
            @csrf
            @method('PUT')
            <div>
                <h1 class=" text-[#f7a317] text-5xl font-extrabold my-8 text-center">Edit Book</h1>
            </div>
            <div class="mt-4">
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{$book->title}}" required autofocus autocomplete="title" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="content" :value="__('Content')" />
                <x-text-input id="content" class="block mt-1 w-full h-40" type="text" name="content" value="{{$book->content}}" required autofocus autocomplete="body" />
                <x-input-error :messages="$errors->get('content')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="publish_at" :value="__('Published At')" />
                <x-text-input id="publish_at" class="block mt-1 w-full" type="text" name="publish_at" value="{{$book->published_at}}" required autofocus autocomplete="publish_at" />
                <x-input-error :messages="$errors->get('publish_at')" class="mt-2" />
            </div>

            <x-primary-button class="ms-3 mt-8">
                    {{ __('Send') }}
            </x-primary-button>
        </form>
    </x-guest-layout>
@endsection
</x-app-layout>