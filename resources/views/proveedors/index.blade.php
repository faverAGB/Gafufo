@extends('layouts.app')

@section('content')
	<div class="col-sm-12">
		<h2>
			Proveedores
			<a href="{{ route('proveedors.create') }}" class="btn btn-primary pull-right">Nuevo Proveedor</a>
		</h2>
		@include('proveedors.fragmentos.info')
		<table class="table table-hover table-striped ">
			<thead class="bg-primary">
				<tr>
					<th>Nit</th>
					<th>Razon Social</th>
					<th>Ciudad</th>
					<th colspan="2">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($proveedor as $proveedor1)
					<tr>
						<td>{{ $proveedor1->nit }}</td>
						<td>{{ $proveedor1->razon_social }}</td>
						<td>{{ $proveedor1->ciudad->nombre_ciudad }} </td>
						<td>
							<a href="{{ route('proveedors.show', $proveedor1) }}" type="button" class="btn btn-primary">Ver</a>
						</td>
						<td>
							<a href="{{ route('proveedors.edit', $proveedor1) }}" type="button" class="btn btn-warning">Editar</a>
						</td>
						<!-- <td>
							<form action="{{ route('proveedors.destroy', $proveedor1) }}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-danger">Eliminar</button>
							</form>
                		</td> -->
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $proveedor->render() !!}
	</div>

@endsection