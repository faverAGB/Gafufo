@extends('layouts.app')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<h2>
			Editar Cliente
			<a href="{{ route('clientes.index') }}" class="btn btn-default pull-right">Clientes</a>
		</h2>
		
		@include('clientes.fragmentos.error')
		{!! Form::model($cliente, ['route' => ['clientes.update', $cliente], 'method' => 'PUT' ]) !!}
		 	@include('clientes.fragmentos.form')
         {!!Form::close()!!}

	</div>
@endsection