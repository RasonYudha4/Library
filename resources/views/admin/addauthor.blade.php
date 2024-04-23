<x-app-layout>
@section('content')
    <x-guest-layout>
        <form method="POST" action="/admin/author" enctype="multipart/form-data">
            @csrf
            <div>
                <h1 class=" text-[#f7a317] text-5xl font-extrabold my-8 text-center">Add Author</h1>
            </div>
            <div class="mt-4">
                <x-input-label for="author_name" :value="__('Author Name')" />
                <x-text-input id="author_name" class="block mt-1 w-full" type="text" name="author_name" :value="old('author_name')" autofocus autocomplete="author_name" />
                <x-input-error :messages="$errors->get('author_name')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="author_nationality" :value="__('Author Nationality')" />
                <x-text-input id="author_nationality" class="block mt-1 w-full" type="text" name="author_nationality" :value="old('author_nationality')" autofocus autocomplete="author_nationality" />
                <x-input-error :messages="$errors->get('author_nationality')" class="mt-2" />
            </div>
            <x-primary-button class="ms-3 mt-8">
                    {{ __('Send') }}
            </x-primary-button>
        </form>
    </x-guest-layout>
@endsection
</x-app-layout>