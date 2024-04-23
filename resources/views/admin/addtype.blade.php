<x-app-layout>
@section('content')
    <x-guest-layout>
        <form method="POST" action="/admin/type" enctype="multipart/form-data">
            @csrf
            <div>
                <h1 class=" text-[#f7a317] text-5xl font-extrabold my-8 text-center">Add Book Genre</h1>
            </div>
            <div class="mt-4">
                <x-input-label for="type" :value="__('Type')" />
                <x-text-input id="type" class="block mt-1 w-full" type="text" name="type" :value="old('type')" autofocus autocomplete="type" />
                <x-input-error :messages="$errors->get('type')" class="mt-2" />
            </div>
            <x-primary-button class="ms-3 mt-8">
                    {{ __('Send') }}
            </x-primary-button>
        </form>
    </x-guest-layout>
@endsection
</x-app-layout>