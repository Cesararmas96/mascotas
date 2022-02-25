<div class="card">
  <div class="card-header">
    <div>
    </div>
  </div>
  <div class="card-body">
    <table class="table table-stripe">
      <thead>
        <tr>
          <th>ID</th>
          <th>Usuario</th>
          <th>Cedula</th>
          <th>Rol</th>

          <th colspan="2">Estatus</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->persona_id }}</td>
            <td>{{ $user->roles }}</td>
            @if ($user->status)
              <td class="text-green">Activo</td>
            @else
              <td class="text-red">Inactivo</td>
            @endif
            <td width="10">
              <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-primary btn-sm">Editar</a>
            </td>
            <td width="10">
              <form action="{{ route('admin.users.destroy', $user) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div>
    {{ $users->links() }}
  </div>
</div>
