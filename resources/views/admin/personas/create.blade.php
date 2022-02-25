@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  @if (session('info'))
    <div class="alert alert-success">
      <strong>{{ session('info') }}</strong>
    </div>
  @endif
  <h1>Crear Persona</h1>
@stop

@section('content')
  <div class="card">
    <div class="card-body">

      {!! Form::open(['route' => 'admin.personas.store', 'autocomplete' => 'off']) !!}
      @include('admin.personas.partials.form')
      {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
    </div>
  </div>
@stop
