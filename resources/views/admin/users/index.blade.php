@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <a href="{{ route('admin.users.create') }}" class="btn btn-secondary float-right">Crear</a>
  <h1>Listado de Usuarios</h1>
@stop

@section('content')
  @if (session('info'))
    <div class="alert alert-success">
      <strong>{{ session('info') }}</strong>
    </div>
  @endif
  @livewire('admin.users-index')
@stop
