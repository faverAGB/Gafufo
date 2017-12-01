@extends('layouts.app')

@section('content')
	<div class="col-sm-12">
		<h2>
			Clientes
			<a href="{{ route('clientes.create') }}" class="btn btn-primary pull-right">Nuevo Cliente</a>
		</h2>
		@include('clientes.fragmentos.info')
		<table class="table table-hover table-striped ">
			<thead class="bg-primary">
				<tr>
					<th>Nit</th>
					<th>Razon Social</th>
					<th>Ciudad</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cliente as $cliente1)
					<tr>
						<td>{{ $cliente1->nit }}</td>
						<td>{{ $cliente1->razon_social }}</td>
						<td>{{ $cliente1->ciudad->nombre_ciudad }} </td>
						<td>
							<a href="{{ route('clientes.show', $cliente1) }}" type="button" class="btn btn-primary">Ver</a>
						</td>
						<td>
							<a href="{{ route('clientes.edit', $cliente1) }}" type="button" class="btn btn-warning">Editar</a>
						</td>
						<td>
							<form action="{{ route('clientes.destroy', $cliente1) }}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-danger">Eliminar</button>
							</form>
                		</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $cliente->render() !!}
	</div>

@endsection