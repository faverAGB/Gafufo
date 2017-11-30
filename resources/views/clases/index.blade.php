@extends('layouts.app')

@section('content')
	<div class="col-sm-12">
		<h2>
			Clase de Produtos
			<a href="{{ route('clases.create') }}" class="btn btn-primary pull-right">Nueva Clase</a>
		</h2>
		@include('clases.fragmentos.info')
		<table class="table table-hover table-striped ">
			<thead class="bg-primary">
				<tr>
					<th>Codigo</th>
					<th>Nombre</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($clase as $clase1)
					<tr>
						<td>{{ $clase1->codigo_clase }}</td>
						<td>{{ $clase1->nombre_clase }}</td>
						<td>
							<a href="{{ route('clases.show', $clase1) }}" type="button" class="btn btn-primary">Ver</a>
						</td>
						<td>
							<a href="{{ route('clases.edit', $clase1) }}" type="button" class="btn btn-warning">Editar</a>
						</td>
						<td>
							<form action="{{ route('clases.destroy', $clase1) }}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-danger">Eliminar</button>
							</form>
                		</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $clase->render() !!}
	</div>

@endsection