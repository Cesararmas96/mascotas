<div class="card">
  <div class="card-header">
    <div>
    </div>
  </div>
  <div class="card-body">
    <table class="table table-stripe">
      <thead>
        <tr>
          <th>Cedula</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Telefono</th>
          <th colspan="2">Estatus</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($personas as $persona)
          <tr>
            <td>{{ $persona->id }}</td>
            <td>{{ $persona->nombre1 }} {{ $persona->nombre2 }} </td>
            <td>{{ $persona->apellido1 }} {{ $persona->apellido2 }} </td>
            <td>{{ $persona->telefonomovil }} </td>
            @if ($persona->status)
              <td class="text-green">Activo</td>
            @else
              <td class="text-red">Inactivo</td>
            @endif
            <td width="10">
              <a href="{{ route('admin.personas.edit', $persona) }}" class="btn btn-primary btn-sm">Editar</a>
            </td>
            <td width="10">
              <form action="{{ route('admin.personas.destroy', $persona) }}" method="post">
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
    {{ $personas->links() }}
  </div>
</div>
