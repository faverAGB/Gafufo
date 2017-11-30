@extends('layouts.app')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<div class="panel-heading">
			@include('clientes.fragmentos.info')
            <h1 align="center"><b>Detalles de la clase {{ $cliente->id }}</b></h1>
		</div>
		<table class="table table-hover table-stripe table-bordered">
			<tbody>
				<tr>
					<td>Nit</td>
					<td>{{ $cliente->nit }}</td>
				</tr>
				<tr>
					<td>Razon Social</td>
					<td>{{ $cliente->razon_social }}</td>
				</tr>
				<tr>
					<td>Telefono</td>
					<td>{{ $cliente->telefono }}</td>
				</tr>
				<tr>
					<td>Direccion</td>
					<td>{{ $cliente->direccion }}</td>
				</tr>
				<tr>
					<td>ciudad</td>
					<td>{{ $cliente->ciudad_id }} - {{ $cliente->ciudad->nombre_ciudad }}</td>
				</tr>
			</tbody>
		</table>
	</div>

@endsection