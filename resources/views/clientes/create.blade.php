@extends('layouts.app')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<h2>
			Nuevo CLiente
			<a href="{{ route('clientes.index') }}" class="btn btn-default pull-right">Clientes</a>
		</h2>
		
		@include('clientes.fragmentos.error')
		{!! Form::open(['route' => 'clientes.store']) !!}
		 	@include('clientes.fragmentos.form')
         {!!Form::close()!!}

	</div>
@endsection