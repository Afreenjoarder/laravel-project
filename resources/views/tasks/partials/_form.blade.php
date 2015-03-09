


<form action="javascript:;" class="form-horizontal">
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title') !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::textarea('description') !!}
    </div>

    <div class="form-group">
        {!! Form::label('start_date', 'start_date:') !!}
        {!!Form::text('start_date') !!}
    </div>


    <div class="form-group">
        {!! Form::label('end_date', 'end_date:') !!}
        {!! Form::text('end_date') !!}
    </div>
    <div class="form-group">
        {!! Form::label('created_by', 'created_by:') !!}
        {!! Form::text('created_by') !!}
    </div>
    <div class="form-group">
        {!! Form::label('modified_by', 'modified_by:') !!}
        {!! Form::text('modified_by') !!}
    </div>
    <div class="form-group">
        {!! Form::label('status', 'status:') !!}
        {!! Form::text('status') !!}
    </div>
    <div class="form-group">
        {!! Form::label('completed', 'completed:') !!}
        {!! Form::checkbox('completed') !!}
    </div>
    <div class="form-group">
        {!! Form::submit($submit_text) !!}
    </div>
</form>
