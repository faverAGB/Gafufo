<div class="form-group">
	{!! Form::label('codigo_producto', 'Codigo') !!}
    {!! Form::number('codigo_producto', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('proveedor_id', 'Proveedor') !!}
    {!! Form::select('proveedor_id', $proveedor, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('clase_id', 'Clase') !!}
    {!! Form::select('clase_id', $clase, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('precio', 'Preocio') !!}
    {!! Form::text('precio', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>