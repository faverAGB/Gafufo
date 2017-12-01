@extends('layouts.app')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<h2>
			Nuevo Proveedor
			<a href="{{ route('proveedors.index') }}" class="btn btn-default pull-right">Proveedores</a>
		</h2>
		
		@include('proveedors.fragmentos.error')
		{!! Form::open(['route' => 'proveedors.store']) !!}
		 	@include('proveedors.fragmentos.form')
         {!!Form::close()!!}

	</div>
@endsection