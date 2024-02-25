<h1>The list of task</h1>

<div>
    @if (count($tasks))
        @foreach ($tasks as $task)
            <div>{{ $task -> title }}</div>
        @endforeach
    @else
        <div>There are no tasks!</div>            
    @endif
</div>

