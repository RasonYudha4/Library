<x-app-layout>
@section('content')
    <x-guest-layout>
        <form method="POST" action="/feedbacks">
            @csrf
            <div>
                <h1 class=" text-[#f7a317] text-5xl font-extrabold my-8 text-center">Feedback</h1>
            </div>
            <div class="mt-4">
                <x-input-label for="subject" :value="__('Subject')" />
                <x-text-input id="subject" class="block mt-1 w-full" type="text" name="subject" :value="old('subject')" required autofocus autocomplete="subject" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="body" :value="__('Body')" />
                <x-text-input id="body" class="block mt-1 w-full h-40" type="text" name="body" :value="old('body')" required autofocus autocomplete="body" />
                <x-input-error :messages="$errors->get('body')" class="mt-2" />
            </div>

            <x-primary-button class="ms-3 mt-8">
                    {{ __('Send') }}
            </x-primary-button>
        </form>
    </x-guest-layout>
@endsection
</x-app-layout>