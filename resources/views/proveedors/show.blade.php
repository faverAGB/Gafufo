@extends('layouts.app')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<div class="panel-heading">
			@include('proveedors.fragmentos.info')
            <h1 align="center"><b>Detalles del Cliente {{ $proveedor->razon_social}}</b></h1>
		</div>
		<table class="table table-hover table-stripe table-bordered">
			<tbody>
				<tr>
					<td class="bg-primary">Nit</td>
					<td>{{ $proveedor->nit }}</td>
				</tr>
				<tr>
					<td class="bg-primary">Razon Social</td>
					<td>{{ $proveedor->razon_social }}</td>
				</tr>
				<tr>
					<td class="bg-primary">Telefono</td>
					<td>{{ $proveedor->telefono }}</td>
				</tr>
				<tr>
					<td class="bg-primary">Direccion</td>
					<td>{{ $proveedor->direccion }}</td>
				</tr>
				<tr>
					<td class="bg-primary">ciudad</td>
					<td>{{ $proveedor->ciudad->nombre_ciudad }} </td>
				</tr>
				<tr>					
					<td>
						<a href="{{ route('proveedors.index') }}" class="btn btn-default pull-left">Proveedores</a>
					</td>
					<td>
						<a href="{{ route('proveedors.edit', $proveedor) }}" class="btn btn-warning pull-left">Editar</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

@endsection