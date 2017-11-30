@extends('layouts.app')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<h2>
			Nueva Ciudad
			<a href="{{ route('ciudads.index') }}" class="btn btn-default pull-right">Ciudades</a>
		</h2>
		
		@include('ciudads.fragmentos.error')
		{!! Form::open(['route' => 'ciudads.store']) !!}
		 	@include('ciudads.fragmentos.form')
         {!!Form::close()!!}

	</div>
@endsection