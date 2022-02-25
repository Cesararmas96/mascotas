@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <h1>Editar Especie</h1>
@stop

@section('content')
  @if (session('info'))
    <div class="alert alert-success">
      <strong>{{ session('info') }}</strong>
    </div>
  @endif
  <div class="card">
    <div class="card-body">

      {!! Form::model($especy, ['route' => ['admin.especies.update', $especy], 'method' => 'put']) !!}

      @include('admin.especies.partials.form')
      {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
    </div>
  </div>
@stop
