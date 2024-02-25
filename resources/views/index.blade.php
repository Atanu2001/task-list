<h1>The list of task</h1>

<div>
    @forelse ($tasks as $task)
        <!-- <div>{{ $task -> title }}</div> -->
        <div>
            <a href="{{ route('task.show', ['id' => $task -> id]) }}">{{ $task -> title }}</a>
        </div>
    @empty
        <p>No task</p>
    @endforelse 
</div>

