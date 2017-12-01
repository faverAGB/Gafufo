@extends('layouts.app')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<h2>
			Editar Proveedor
			<a href="{{ route('proveedors.index') }}" class="btn btn-default pull-right">Proveedores</a>
		</h2>
		
		@include('proveedors.fragmentos.error')
		{!! Form::model($proveedor, ['route' => ['proveedors.update', $proveedor], 'method' => 'PUT' ]) !!}
		 	@include('proveedors.fragmentos.form')
         {!!Form::close()!!}

	</div>
@endsection