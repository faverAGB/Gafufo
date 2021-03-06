@extends('layouts.app')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<div class="panel-heading">
			@include('clientes.fragmentos.info')
            <h1 align="center"><b>Detalles del cliente {{ $cliente->razon_social}}</b></h1>
		</div>
		<table class="table table-hover table-stripe table-bordered">
			<tbody>
				<tr>
					<td class="bg-primary">Nit</td>
					<td>{{ $cliente->nit }}</td>
				</tr>
				<tr>
					<td class="bg-primary">Razon Social</td>
					<td>{{ $cliente->razon_social }}</td>
				</tr>
				<tr>
					<td class="bg-primary">Telefono</td>
					<td>{{ $cliente->telefono }}</td>
				</tr>
				<tr>
					<td class="bg-primary">Direccion</td>
					<td>{{ $cliente->direccion }}</td>
				</tr>
				<tr>
					<td class="bg-primary">ciudad</td>
					<td>{{ $cliente->ciudad->nombre_ciudad }} </td>
				</tr>
				<tr>					
					<td>
						<a href="{{ route('clientes.index') }}" class="btn btn-default pull-left">Clientes</a>
					</td>
					<td>
						<a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-warning pull-left">Editar</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

@endsection