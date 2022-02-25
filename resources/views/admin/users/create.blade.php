@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <a href="{{ url()->previous() }}" class="btn btn-success float-right">Regresar</a>
@stop

@section('content')
  @if (session('info'))
    <div class="alert alert-success">
      <strong>{{ session('info') }}</strong>
    </div>
  @endif

  <div class="card">

    <div class="card-header card-header-primary">
      <h4 class="card-title">Crear Usuario</h4>
    </div>
    <div class="card-body">
      {!! Form::open(['route' => 'admin.users.store', 'autocomplete' => 'off']) !!}
      @include('admin.users.partials.form')

    </div>
  </div>
  {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
@stop

@section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
@stop
