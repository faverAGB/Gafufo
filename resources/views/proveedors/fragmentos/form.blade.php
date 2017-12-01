<div class="form-group">
	{!! Form::label('nit', 'Identificacion') !!}
    {!! Form::number('nit', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('razon_social', 'Razon Social') !!}
    {!! Form::text('razon_social', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('telefono', 'Telefono') !!}
    {!! Form::number('telefono', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('direccion', 'Direccion') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('ciudad_id', 'ciudad') !!}
    {!! Form::select('ciudad_id', $ciudad, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>