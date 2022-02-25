@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <h1>Editar</h1>
@stop

@section('content')
  @if (session('info'))
    <div class="alert alert-success">{{ session('info') }}</div>
  @else
  @endif
  <div class="card">
    <div class="card-body">
      {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}


      @include('admin.roles.partials.form')
      {!! Form::submit('Editar Rol', ['class' => 'btn btn-primary']) !!}
      {!! Form::close() !!}
    </div>
  </div>
@stop
