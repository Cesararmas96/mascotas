@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <a href="{{ url()->previous() }}" class="btn btn-success float-right">Regresar</a>
  <h1>Crear Especie</h1>
@stop

@section('content')
  @if (session('info'))
    <div class="alert alert-success">
      <strong>{{ session('info') }}</strong>
    </div>
  @endif
  <div class="card">
    <div class="card-body">

      {!! Form::open(['route' => 'admin.razas.store', 'autocomplete' => 'off']) !!}
      @include('admin.razas.partials.form')
      {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
    </div>
  </div>
@stop

@section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
@stop
