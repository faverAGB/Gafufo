@extends('layouts.app')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<h2>
			Nuevo Producto
			<a href="{{ route('productos.index') }}" class="btn btn-default pull-right">Productos</a>
		</h2>
		
		@include('productos.fragmentos.error')
		{!! Form::open(['route' => 'productos.store']) !!}
		 	@include('productos.fragmentos.form')
         {!!Form::close()!!}

	</div>
@endsection