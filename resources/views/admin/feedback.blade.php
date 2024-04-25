<div>
    <h1>Feedbacks</h1>
    <div class="w-5/6 py-10">
        @foreach($feedbacks as $feedback)
        <div>
            <h3>
                {{ $feedback->subject}}
            </h3>

            <p>
            {{ $feedback->body}}
            </p>

            <p>{{$user->email}}</p>

            <a href="{{$feedback->id}}/edit">Edit</a>
            <form action="/admin/feedback/{{$feedback->id}}" method="POST">
                @csrf 
                @method('delete')

                <button type="submit" onclick="return confirm('Are you sure you want to delete this feedback?')">
                    Delete
                </button>
            </form>
        </div>
        @endforeach
    </div>
</div>
