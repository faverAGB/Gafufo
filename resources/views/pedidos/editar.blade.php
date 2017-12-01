@extends('layouts.app')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<h2>
			Editar Producto
			<a href="{{ route('productos.index') }}" class="btn btn-default pull-right">Productos</a>
		</h2>
		
		@include('productos.fragmentos.error')
		{!! Form::model($producto, ['route' => ['productos.update', $producto], 'method' => 'PUT' ]) !!}
		 	@include('productos.fragmentos.form')
         {!!Form::close()!!}

	</div>
@endsection