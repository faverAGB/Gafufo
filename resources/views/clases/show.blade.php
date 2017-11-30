@extends('layouts.app')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<div class="panel-heading">
			@include('clases.fragmentos.info')
            <h1 align="center"><b>Detalles de la clase {{ $clase->id }}</b></h1>
		</div>
		<table class="table table-hover table-stripe table-bordered">
			<thead class="bg-primary">
				<tr>
					<th>
						<h2 align="center"><strong>Clase</strong></h2>
					</th>
					<th>
						<h2 align="center"><strong>Codigo</strong></h2>
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<h3>{{ $clase->nombre_clase }}</h3>
					</td>
					<td>
						<h3>{{ $clase->codigo_clase }}</h3>
					</td>
				</tr>
				<tr>					
					<td>
						<a href="{{ route('clases.index') }}" class="btn btn-default pull-left">Clases</a>
					</td>
					<td>
						<a href="{{ route('clases.edit', $clase) }}" class="btn btn-warning pull-left">Editar</a>
					</td>
				</tr>
			</tbody>			
		</table>
	</div>

@endsection