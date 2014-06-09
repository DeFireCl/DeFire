@extends ('admin/layout')

@section ('title') Lista de Arrendatarios @stop

@section ('content')


  <h3>Lista de Usuarios</h3>

  <p>
    <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Crear un nuevo usuario</a>
  </p>
  
  <table class="table table-striped">
    <tr> 	
        <th>Nombre Completo</th>
        <th>Email</th>
        <th>Acciones</th>
    </tr>
    @foreach ($users as $user)
    <tr>
    	<td>{{ $user->full_name }}</td>
    	<td>{{ $user->email }}</td>
        <td>
        	<a href="{{ route('admin.users.show', array($user->id)) }}" class="btn btn-info btn-sm">Detalle</a>
        	<a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary btn-sm">Editar</a>
        	<a href="#" data-id="{{ $user->id }}" class="btn btn-danger btn-delete btn-sm">Eliminar</a>
        </td>
    </tr>
    @endforeach
  </table>

  {{ $users->links() }}

{{-- Formulario para eliminar registro --}}
{{ Form::open(array('route' => array('admin.users.destroy', 'USER_ID'), 'method' => 'DELETE', 'role' => 'form', 'id' => 'form-delete')) }}
{{ Form::close() }}
@stop