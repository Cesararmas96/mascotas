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
          <th>Raza</th>
          <th>Especie</th>
          <th colspan="2">Estatus</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($razas as $raza)
          <tr>
            <td>{{ $raza->id }}</td>
            <td>{{ $raza->nombre }}</td>
            <td>{{ $raza->especie->nombre }}</td>
            @if ($raza->status)
              <td class="text-green">Activo</td>
            @else
              <td class="text-red">Inactivo</td>
            @endif
            <td width="10">
              <a href="{{ route('admin.razas.edit', $raza) }}" class="btn btn-primary btn-sm">Editar</a>
            </td>
            <td width="10">
              <form action="{{ route('admin.razas.destroy', $raza) }}" method="post">
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
    {{ $razas->links() }}
  </div>
</div>
