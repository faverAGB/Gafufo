@extends('layouts.app')

@section('content')
	<div class="col-sm-12">
		<h2>
			Productos
			<a href="{{ route('productos.create') }}" class="btn btn-primary pull-right">Nuevo Producto</a>
		</h2>
		@include('productos.fragmentos.info')
		<table class="table table-hover table-striped ">
			<thead class="bg-primary">
				<tr>
					<th>Producto</th>
					<th>Clase</th>
					<th>Precio</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($producto as $producto1)
					<tr>
						<td>{{ $producto1->descripcion }}</td>
						<td>{{ $producto1->clase->nombre_clase }}</td>
						<td>{{ $producto1->precio }} </td>
						<td>
							<a href="{{ route('productos.show', $producto1) }}" type="button" class="btn btn-primary">Ver</a>
						</td>
						<td>
							<a href="{{ route('productos.edit', $producto1) }}" type="button" class="btn btn-warning">Editar</a>
						</td>
						<td>
							<form action="{{ route('productos.destroy', $producto1) }}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-danger">Eliminar</button>
							</form>
                		</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $producto->render() !!}
	</div>

@endsection