<div>
  <div class="form-group">
    {!! Form::label('id', 'Cedula') !!}
    {!! Form::number('id', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Cedula']) !!}

    @error('id')
      <span class="text-danger">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group">
    {!! Form::label('nombre1', 'Primer Nombre') !!}
    {!! Form::text('nombre1', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el primer Nombre']) !!}

    @error('nombre1')
      <span class="text-danger">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group">
    {!! Form::label('nombre2', 'Segundo Nombre') !!}
    {!! Form::text('nombre2', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el segundo Nombre']) !!}

    @error('nombre2')
      <span class="text-danger">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group">
    {!! Form::label('apellido1', 'Primer Apellido') !!}
    {!! Form::text('apellido1', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el primer apellido']) !!}

    @error('apellido1')
      <span class="text-danger">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group">
    {!! Form::label('apellido2', 'Segundo Apellido') !!}
    {!! Form::text('apellido2', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el segundo apellido']) !!}

    @error('apellido2')
      <span class="text-danger">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::textarea('direccion', null, ['class' => 'form-control']) !!}

    @error('direccion')
      <span class="text-danger">{{ $message }}</span>
    @enderror
  </div>

  <div class="form-group">
    {!! Form::label('telefonomovil', 'Telefono Movil') !!}
    {!! Form::number('telefonomovil', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Telefono Movil']) !!}

    @error('telefonomovil')
      <span class="text-danger">{{ $message }}</span>
    @enderror
  </div>



</div>
