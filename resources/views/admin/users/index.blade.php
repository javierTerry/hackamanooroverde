@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					Empleado
				</div>
				<div class="panel-body">

					@if( isset($notices))
					<p>

						<div class="alert alert-warning" role="alert">
							@foreach($notices as $notice)
							<p></p>
							<strong> {{ $notice }} </strong>
							@endforeach
						</div>

					</p>
					@endif
					{!! Form::model(Request::only(['name','email']), [ 'route' => ['admin.users.index'], 'method' => 'GET', 'class'=>'navbar-form navbar-left pull-right', 'role'=>'search' ]) !!}
					<div class="form-group">
						{!! Form::text( 'name', null, ['class' => 'form-control', 'placeholder' => 'Nombre, apellidos' ]) !!}
						{!! Form::text( 'email', null, ['class' => 'form-control', 'placeholder' => 'email' ]) !!}
					</div>
					<button type="submit" class="btn btn-default">
						Buscar
					</button>

					{!! Form::close() !!}
					<p>
						<a class="btn btn-info" href=" {{ route('admin.users.create') }} " role="button"> Nuevo Empleado </a>
					</p>

					Empleado registrados {{ $users ->total()}}, Total de paginas {{ $users ->lastPage()}} , Pagina actual {{ $users ->currentPage()}}
					{!! $users->appends(Request::only(['name','email']))->render() !!}
					</p>
					<table class="table table-striped">
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>Email</th>
							<th>Acciones</th>
						</tr>
						@foreach($users as $user)
						<tr>
							<th>{{ $user -> id}}</th>
							<th>{{ $user -> name}}</th>
							<th>{{ $user -> email}}</th>
							<th> {!! Form::open([ 'route' => ['admin.users.destroy', $user], 'method' => 'DELETE' ]) !!}
							<button type="submit" class="btn btn-danger" >
								Eliminar
							</button><a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-info" >Editar</a> {!! Form::close() !!} </th>
						</tr>
						@endforeach
					</table>
					{!! $users->appends(Request::only(['name','email']))->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
