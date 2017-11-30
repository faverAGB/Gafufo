@extends('layouts.app')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<h2>
			Editar Clase
			<a href="{{ route('clases.index') }}" class="btn btn-default pull-right">Clases</a>
		</h2>
		
		@include('clases.fragmentos.error')
		{!! Form::model($clase, ['route' => ['clases.update', $clase], 'method' => 'PUT' ]) !!}
		 	@include('clases.fragmentos.form')
         {!!Form::close()!!}

	</div>
@endsection