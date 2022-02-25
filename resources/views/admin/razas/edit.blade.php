@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <h1>Editar Raza</h1>
@stop

@section('content')
  @if (session('info'))
    <div class="alert alert-success">
      <strong>{{ session('info') }}</strong>
    </div>
  @endif
  <div class="card">
    <div class="card-body">

      {!! Form::model($raza, ['route' => ['admin.razas.update', $raza], 'method' => 'put']) !!}

      @include('admin.razas.partials.form')
      {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
    </div>
  </div>
@stop
