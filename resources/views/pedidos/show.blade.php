@extends('layouts.app')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<div class="panel-heading">
			@include('productos.fragmentos.info')
            <h1 align="center"><b>Detalles del Producto {{ $producto->descripcion}}</b></h1>
		</div>
		<table class="table table-hover table-stripe table-bordered">
			<tbody>
				<tr>
					<td class="bg-primary">codigo</td>
					<td>{{ $producto->codigo_producto }}</td>
				</tr>
				<tr>
					<td class="bg-primary">Descripcion</td>
					<td>{{ $producto->descripcion }}</td>
				</tr>
				<tr>
					<td class="bg-primary">Proveedor</td>
					<td>{{ $producto->proveedor->razon_social }}</td>
				</tr>
				<tr>
					<td class="bg-primary">clase</td>
					<td>{{ $producto->clase->nombre_clase }}</td>
				</tr>
				<tr>
					<td class="bg-primary">ciudad</td>
					<td>{{ $producto->precio }} </td>
				</tr>
				<tr>					
					<td>
						<a href="{{ route('productos.index') }}" class="btn btn-default pull-left">Productos</a>
					</td>
					<td>
						<a href="{{ route('productos.edit', $producto) }}" class="btn btn-warning pull-left">Editar</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

@endsection