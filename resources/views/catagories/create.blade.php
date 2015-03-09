@extends('layouts.task')

@section('content')
    <h2>Create Catagories</h2>

    {!! Form::model(new App\Catagory, ['route' => ['catagories.store']]) !!}
    @include('catagories/partials/_form', ['submit_text' => 'Create Catagory'])
    {!! Form::close() !!}
@endsection




