@extends('layouts.task')

@section('content')
    <h2>Edit Task "{{ $task->title }}"</h2>

    {!! Form::model($task, ['method' => 'PATCH', 'route' => ['catagories.tasks.update', $catagory->id, $task->id]]) !!}
    @include('tasks/partials/_form', ['submit_text' => 'Edit Task'])
    {!! Form::close() !!}
@endsection




<p>
        {!! link_to_route('catagories.tasks.create', 'Create Task', $task->catagory_id) !!}

</p>

<!-- /resources/views/tasks/edit.blade.php -->