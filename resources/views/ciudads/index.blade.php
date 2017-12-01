@extends('layouts.app')

@section('content')
	<div class="col-sm-12">
		<h2>
			Ciudades
			<a href="{{ route('ciudads.create') }}" class="btn btn-primary pull-right">Nueva Ciudad</a>
		</h2>
		@include('ciudads.fragmentos.info')
		<table class="table table-hover table-striped ">
			<thead class="bg-primary">
				<tr>
					<th>Codigo</th>
					<th>Nombre</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($ciudad as $ciudad1)
					<tr>
						<td>{{ $ciudad1->codigo_postal }}</td>
						<td>{{ $ciudad1->nombre_ciudad }}</td>
						<td>
							<a href="{{ route('ciudads.show', $ciudad1) }}" type="button" class="btn btn-primary">Ver</a>
						</td>
						<td>
							<a href="{{ route('ciudads.edit', $ciudad1) }}" type="button" class="btn btn-warning">Editar</a>
						</td>
						<td>
							<form action="{{ route('ciudads.destroy', $ciudad1) }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="DELETE">
							<button class="btn btn-danger">eliminar</button>
						</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $ciudad->render() !!}
	</div>

@endsection