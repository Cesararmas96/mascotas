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
          <th>Nombre</th>
          <th colspan="2">Estatus</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($especies as $especie)
          <tr>
            <td>{{ $especie->id }}</td>
            <td>{{ $especie->nombre }}</td>
            @if ($especie->status)
              <td class="text-green">Activo</td>
            @else
              <td class="text-red">Inactivo</td>
            @endif
            <td width="10">
              <a href="{{ route('admin.especies.edit', $especie) }}" class="btn btn-primary btn-sm">Editar</a>
            </td>
            <td width="10">
              <form action="{{ route('admin.especies.destroy', $especie) }}" method="post">
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
    {{ $especies->links() }}
  </div>
</div>
