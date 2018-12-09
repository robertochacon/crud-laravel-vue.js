@extends('app')

@section('content')

<div id="crud" class="row">
	<div class="col-sm-7">
			<h1>Crud laravel y vue.js</h1>
		<div class="col-sm-12">
			<a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create">Nueva Tarea</a>
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tarea</th>
						<th colspan="2">&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="keep in keeps">
						<td>@{{ keep.id }}</td>
						<td>@{{ keep.keep }}</td>
						<td><a href="#" class="btn btn-warning btn-sm" v-on:click.prevent="editKeep(keep)">Editar</a></td>
						<td><a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="deleteKeeps(keep)">Eliminar</a></td>
					</tr>
				</tbody>
				
			</table>
			@include('create')
			@include('edit')
		</div>
	</div>
	<div class="col-sm-5">
		<pre>
			@{{ $data }}
		</pre>
	</div>
</div>

@endsection()