<div>
  <div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la especie']) !!}

    @error('nombre')
      <span class="text-danger">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group">
    {!! Form::label('especie_id', 'Especie:') !!}
    {!! Form::select('especie_id', $especies, null, ['class' => 'form-control']) !!}

    @error('especie_id')
      <small class="text-danger">{{ $message }}</small>
    @enderror
  </div>


  <div class="form-group">
    <p class="font-weight-bold">Estado</p>

    <label for="" class="mr-2">
      {!! Form::radio('status', 1, true) !!}
      Activo
    </label>


    <label for="">
      {!! Form::radio('status', 0) !!}
      Inactivo
    </label>

    @error('status')
      <span class="text-danger">{{ $message }}</span>
    @enderror
  </div>

</div>
