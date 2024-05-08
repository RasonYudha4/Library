<x-app-layout>
@section('content')
<div class=" min-h-screen w-full bg-[#181818]">
    <h1 class=" text-[#f7a317] font-extrabold text-5xl m-8">Feedbacks</h1>
    <table class=" w-full mt-8">
        <thead>
            <tr>
                <th class="text-[#f7a317] mr-6">Subject</th>
                <th class="text-[#f7a317] mr-6">Body</th>
                <th class="text-[#f7a317] mr-6">Email</th>
                <th class="text-[#f7a317] mr-6">Delete</th>
            </tr>
        </thead>
        <tbody class=" mt-7">
            @foreach($feedbacks as $feedback)
            <tr class="m-2">
                <td class="text-[#f7a317] px-6">{{ $feedback->subject}}</td>
                <td class="text-[#f7a317] px-6 text-ellipsis overflow-hidden max-w-80">{{ $feedback->body}}</td>
                @foreach ($users as $user)
                    @if ($feedback->userId == $user->id)
                        @break  // Exit inner loop after finding a match (valid syntax)
                    @endif
                @endforeach
                <td class="text-[#f7a317] px-6">{{$user->email}}</td>
                <td>
                    <form action="/admin/feedback/{{$feedback->id}" method="POST">
                        @csrf 
                        @method('delete')

                        <button type="submit" onclick="return confirm('Are you sure you want to delete this book?')" class=" px-3 text-[#f7a317] hover:text-[#ea6820]">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
</x-app-layout>