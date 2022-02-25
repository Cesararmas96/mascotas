<div>
  <div class="form-group">
    {!! Form::label('persona_id', 'Persona:') !!}
    {!! Form::select('persona_id', $personas, null, ['class' => 'form-control']) !!}

    @error('persona_id')
      <small class="text-danger">{{ $message }}</small>
    @enderror
  </div>

  <div class="form-group">
    {!! Form::label('name', 'Nombre del Usuario') !!}
    {!! Form::text('name', null, ['required' => true, 'class' => 'form-control', 'placeholder' => 'Ingrese el Nombre del usuario']) !!}

    @error('name')
      <span class="text-danger">{{ $message }}</span>
    @enderror
  </div>

  {{-- <div class="form-group">
    {!! Form::label('password', 'password') !!}
    {{ Form::password('password', ['placeholder' => 'Ingrese la contraseña', 'class' => 'form-control']) }}


    @error('password')
      <span class="text-danger">{{ $message }}</span>
    @enderror
  </div> --}}

  <div class="form-group">
    {!! Form::label('email', 'email') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el email de la especie']) !!}

    @error('email')
      <span class="text-danger">{{ $message }}</span>
    @enderror
  </div>
  @foreach ($roles as $role)
    <div>
      <label>
        {!! Form::radio('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
        {{ $role->name }}
      </label>
    </div>
  @endforeach


  {{-- <div class="form-group">
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
    @enderror --}}
</div>

</div>
