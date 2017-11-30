<div class="form-group">
	{!! Form::label('codigo_postal', 'Codigo de Ciudad') !!}
    {!! Form::number('codigo_postal', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('nombre_ciudad', 'Nombre de Ciudad') !!}
    {!! Form::text('nombre_ciudad', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>