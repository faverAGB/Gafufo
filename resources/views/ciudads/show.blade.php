@extends('layouts.app')

@section('content')
	<div class="col-md-6 col-md-offset-3">
		<div class="panel-heading">
			@include('ciudads.fragmentos.info')
            <h1 align="center"><b>Detalles de la ciudad {{ $ciudad->id }}</b></h1>
		</div>
		<table class="table table-hover table-stripe table-bordered">
			<thead class="bg-primary">
				<tr>
					<th>
						<h2 align="center"><strong>Ciudad</strong></h2>
					</th>
					<th>
						<h2 align="center"><strong>Codigo</strong></h2>
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<h3>{{ $ciudad->nombre_ciudad }}</h3>
					</td>
					<td>
						<h3>{{ $ciudad->codigo_postal }}</h3>
					</td>
				</tr>
				<tr>					
					<td>
						<a href="{{ route('ciudads.index') }}" class="btn btn-default pull-left">Ciudades</a>
					</td>
					<td>
						<a href="{{ route('ciudads.edit', $ciudad) }}" class="btn btn-warning pull-left">Editar</a>
					</td>
				</tr>
			</tbody>			
		</table>
	</div>

@endsection