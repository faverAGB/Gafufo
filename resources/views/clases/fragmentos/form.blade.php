<div class="form-group">
	{!! Form::label('codigo_clase', 'Codigo de Clase') !!}
    {!! Form::number('codigo_clase', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('nombre_clase', 'Nombre de Ciudad') !!}
    {!! Form::text('nombre_clase', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>