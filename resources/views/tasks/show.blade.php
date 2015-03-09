@extends('layouts.task')
@section('content')
    <h2>
        {!! link_to_route('catagories.show', $catagory->cTitle, [$catagory->id]) !!}
        {{ $task->title }}
    </h2>
    {{ $task->description }}
    {{$task->status}}
    <p>
        {!! link_to_route('catagories.index', 'Back to catagories') !!} |
        {!! link_to_route('catagories.tasks.create', 'Create Task', $task->catagory_id) !!}
    </p>
@endsection
