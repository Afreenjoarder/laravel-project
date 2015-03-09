
<div class="form-group">
    {!! Form::label('cTitle', 'cTitle:') !!}
    {!! Form::text('cTitle') !!}
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
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>




